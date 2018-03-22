<?php
namespace App\CustomClasses;

/**
 *
 */
class Television extends ElectronicItem implements Item
{
    // No limit
    const MAX_EXTRAS_IN_TELEVISION = null;

    public function maxExtras()
    {
        return static::MAX_EXTRAS_IN_TELEVISION;
    }
}
