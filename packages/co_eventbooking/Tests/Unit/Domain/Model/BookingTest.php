<?php
namespace CO\CoEventbooking\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class BookingTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \CO\CoEventbooking\Domain\Model\Booking
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \CO\CoEventbooking\Domain\Model\Booking();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNumberReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNumber()
        );
    }

    /**
     * @test
     */
    public function setNumberForStringSetsNumber()
    {
        $this->subject->setNumber('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'number',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGenderReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getGender()
        );
    }

    /**
     * @test
     */
    public function setGenderForStringSetsGender()
    {
        $this->subject->setGender('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'gender',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFirstNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getFirstName()
        );
    }

    /**
     * @test
     */
    public function setFirstNameForStringSetsFirstName()
    {
        $this->subject->setFirstName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'firstName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLastNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLastName()
        );
    }

    /**
     * @test
     */
    public function setLastNameForStringSetsLastName()
    {
        $this->subject->setLastName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'lastName',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );
    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail()
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'email',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDsgvoReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getDsgvo()
        );
    }

    /**
     * @test
     */
    public function setDsgvoForBoolSetsDsgvo()
    {
        $this->subject->setDsgvo(true);

        self::assertAttributeEquals(
            true,
            'dsgvo',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEventReturnsInitialValueForEvent()
    {
        self::assertEquals(
            null,
            $this->subject->getEvent()
        );
    }

    /**
     * @test
     */
    public function setEventForEventSetsEvent()
    {
        $eventFixture = new \CO\CoEventbooking\Domain\Model\Event();
        $this->subject->setEvent($eventFixture);

        self::assertAttributeEquals(
            $eventFixture,
            'event',
            $this->subject
        );
    }
}
