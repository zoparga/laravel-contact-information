<?php

namespace zoparga\ContactInformation;

use Illuminate\Support\Facades\Facade;

/**
 * @see \zoparga\ContactInformation\ContactInformation
 */
class ContactInformationFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'contact-information';
    }
}
