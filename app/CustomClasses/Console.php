<?php
namespace App\CustomClasses;

/**
 *
 */
class Console extends ElectronicItem implements Item
{
    //Limit 4
    const MAX_EXTRAS_IN_CONSOLE = 4;

    public function maxExtras()
    {
        return static::MAX_EXTRAS_IN_CONSOLE;
    }
}
