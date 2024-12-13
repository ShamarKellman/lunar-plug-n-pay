<?php

namespace ShamarKellman\LunarPlugNPay;

use ShamarKellman\LunarPlugNPay\Commands\LunarPlugNPayCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LunarPlugNPayServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('lunar-plug-n-pay')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_lunar_plug_n_pay_table')
            ->hasCommand(LunarPlugNPayCommand::class);
    }
}
