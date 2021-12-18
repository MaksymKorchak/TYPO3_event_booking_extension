<?php
namespace CO\CoEventbooking\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class EventTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \CO\CoEventbooking\Domain\Model\Event
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \CO\CoEventbooking\Domain\Model\Event();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDate()
        );
    }

    /**
     * @test
     */
    public function setDateForDateTimeSetsDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'date',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTicketAmountReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getTicketAmount()
        );
    }

    /**
     * @test
     */
    public function setTicketAmountForIntSetsTicketAmount()
    {
        $this->subject->setTicketAmount(12);

        self::assertAttributeEquals(
            12,
            'ticketAmount',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'image',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSlugReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSlug()
        );
    }

    /**
     * @test
     */
    public function setSlugForStringSetsSlug()
    {
        $this->subject->setSlug('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'slug',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPlaceReturnsInitialValueForPlace()
    {
        self::assertEquals(
            null,
            $this->subject->getPlace()
        );
    }

    /**
     * @test
     */
    public function setPlaceForPlaceSetsPlace()
    {
        $placeFixture = new \CO\CoEventbooking\Domain\Model\Place();
        $this->subject->setPlace($placeFixture);

        self::assertAttributeEquals(
            $placeFixture,
            'place',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSpeakerReturnsInitialValueForSpeaker()
    {
        self::assertEquals(
            null,
            $this->subject->getSpeaker()
        );
    }

    /**
     * @test
     */
    public function setSpeakerForSpeakerSetsSpeaker()
    {
        $speakerFixture = new \CO\CoEventbooking\Domain\Model\Speaker();
        $this->subject->setSpeaker($speakerFixture);

        self::assertAttributeEquals(
            $speakerFixture,
            'speaker',
            $this->subject
        );
    }
}
