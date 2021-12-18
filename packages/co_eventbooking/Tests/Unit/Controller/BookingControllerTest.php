<?php
namespace CO\CoEventbooking\Tests\Unit\Controller;

/**
 * Test case.
 */
class BookingControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \CO\CoEventbooking\Controller\BookingController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\CO\CoEventbooking\Controller\BookingController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllBookingsFromRepositoryAndAssignsThemToView()
    {

        $allBookings = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $bookingRepository = $this->getMockBuilder(\CO\CoEventbooking\Domain\Repository\BookingRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $bookingRepository->expects(self::once())->method('findAll')->will(self::returnValue($allBookings));
        $this->inject($this->subject, 'bookingRepository', $bookingRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('bookings', $allBookings);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenBookingToBookingRepository()
    {
        $booking = new \CO\CoEventbooking\Domain\Model\Booking();

        $bookingRepository = $this->getMockBuilder(\CO\CoEventbooking\Domain\Repository\BookingRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $bookingRepository->expects(self::once())->method('add')->with($booking);
        $this->inject($this->subject, 'bookingRepository', $bookingRepository);

        $this->subject->createAction($booking);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenBookingToView()
    {
        $booking = new \CO\CoEventbooking\Domain\Model\Booking();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('booking', $booking);

        $this->subject->editAction($booking);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenBookingInBookingRepository()
    {
        $booking = new \CO\CoEventbooking\Domain\Model\Booking();

        $bookingRepository = $this->getMockBuilder(\CO\CoEventbooking\Domain\Repository\BookingRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $bookingRepository->expects(self::once())->method('update')->with($booking);
        $this->inject($this->subject, 'bookingRepository', $bookingRepository);

        $this->subject->updateAction($booking);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenBookingFromBookingRepository()
    {
        $booking = new \CO\CoEventbooking\Domain\Model\Booking();

        $bookingRepository = $this->getMockBuilder(\CO\CoEventbooking\Domain\Repository\BookingRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $bookingRepository->expects(self::once())->method('remove')->with($booking);
        $this->inject($this->subject, 'bookingRepository', $bookingRepository);

        $this->subject->deleteAction($booking);
    }
}
