<?php

namespace zoparga\ContactInformation;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use zoparga\ContactInformation\Commands\ContactInformationCommand;

class ContactInformationServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('contact-information')
            //->hasConfigFile()
            //->hasViews()
            ->hasMigration('create_contact-information_table');
        //->hasCommand(ContactInformationCommand::class);
    }
}
