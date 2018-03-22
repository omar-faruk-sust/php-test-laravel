<?php
namespace App\CustomClasses;

class ElectronicItem
{

    /**
     * @var float
     */
    public $price;

    /**
     * @var string
     */
    private $type;
    /**
    * @var boolean
    */
    public $wired;

    public $extras = [];

    const ELECTRONIC_ITEM_TELEVISION = 'television';
    const ELECTRONIC_ITEM_CONSOLE = 'console';
    const ELECTRONIC_ITEM_MICROWAVE = 'microwave';
    const ELECTRONIC_ITEM_CONTROLLER = 'controller';

    private static $types = array(
        self::ELECTRONIC_ITEM_CONSOLE,
        self::ELECTRONIC_ITEM_MICROWAVE,
        self::ELECTRONIC_ITEM_TELEVISION,
        self::ELECTRONIC_ITEM_CONTROLLER
    );

    public function getPrice()
    {
        return $this->price;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getWired()
    {
        return $this->wired;
    }

    public function setPrice($price)
    {
        if (preg_match("/^[0-9]+(\.[0-9]{2})?$/", $price)) {
            $this->price = $price;
            return $this;
        } else {
            //$this->price = 0;
            throw new \Exception("Price should be only floating number or integer");
        }
    }

    public function setType($type)
    {
        if (in_array(strtolower($type), self::$types)) {
            $this->type = $type;
            return $this;
        } else {
            throw new \Exception($this->type." does not exit on item types.");
        }
    }

    public function setWired($wired)
    {
        $this->wired = $wired;
        return $this;
    }


    public function getExtras()
    {
        return $this->extras;
    }

    public function addExtra(ElectronicItem $item)
    {
        $this->maxExtras();

        $this->extras[] = $item;
    }

    public function addExtras(array $items)
    {
        foreach ($items as $item) {
            $this->addExtra($item);
        }
    }
}
