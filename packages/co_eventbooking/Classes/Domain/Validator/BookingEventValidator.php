<?php
namespace CO\CoEventbooking\Domain\Validator;

use TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator;

class BookingEventValidator extends AbstractValidator
{
   protected function isValid($event)
   {
        if ($event->getTicketAmount() < 1) {
            $this->addError('No tickets left.', 1608288906);
            return;
        }

        if ($event->getDate()->format('U') < time()) {
            $this->addError('Event is over.', 1608288913);
            return;
        }
   }
}