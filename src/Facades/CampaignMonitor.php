<?php

namespace Svikramjeet\Hello\Facades;

use Illuminate\Support\Facades\Facade;

class CampaignMonitor extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'campaignmonitor';
    }
}
