<?php
namespace App\CustomClasses;

/**
 *
 */
class Controller extends ElectronicItem implements Item
{
    // No Extra
    const MAX_EXTRAS_IN_CONTROLLER = 0;

    public function maxExtras()
    {
        return static::MAX_EXTRAS_IN_CONTROLLER;
    }
}
