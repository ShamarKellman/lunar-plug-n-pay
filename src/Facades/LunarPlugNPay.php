<?php

namespace ShamarKellman\LunarPlugNPay\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ShamarKellman\LunarPlugNPay\LunarPlugNPay
 */
class LunarPlugNPay extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \ShamarKellman\LunarPlugNPay\LunarPlugNPay::class;
    }
}
