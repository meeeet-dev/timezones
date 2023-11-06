<?php

namespace MeeeetDev\Timezones;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MeeeetDev\Timezones\Skeleton\SkeletonClass
 */
class TimezonesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'timezones';
    }
}
