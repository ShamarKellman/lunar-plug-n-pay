<?php

namespace ShamarKellman\LunarPlugNPay\Commands;

use Illuminate\Console\Command;

class LunarPlugNPayCommand extends Command
{
    public $signature = 'lunar-plug-n-pay';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
