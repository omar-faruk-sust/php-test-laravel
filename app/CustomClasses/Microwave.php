<?php
namespace App\CustomClasses;

/**
 *
 */
class Microwave extends ElectronicItem implements Item
{
    // Can not have extra
    const MAX_EXTRAS_IN_MICROWAVE = 0;

    public function maxExtras()
    {
        return static::MAX_EXTRAS_IN_MICROWAVE;
    }
}
