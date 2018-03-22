<?php
namespace App\CustomClasses;

class ElectronicItems
{
    private $items = array();

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * Returns the items depending on the sorting type requested
     *
     * @return array
     */
    public function getSortedItems()
    {
        $sorted = array();
        // var_dump($this->items);
        // die('here');
        foreach ($this->items as $item) {
            $sorted[($item->price * 100)] = $item;
        }

        ksort($sorted, SORT_NUMERIC);
        return $sorted;
    }

    /**
     *
     * @param string $type
     * @return array
     */
    public function getItemsByType($type)
    {
        if (in_array($type, ElectronicItem::$types)) {
            $callback = function ($item) use ($type) {
                return $item->type == $type;
            };

            $items = array_filter($this->items, $callback);
        }

        return false;
    }

    /**
     * Return total price of all items
     * @return float
     */
    public function getTotalPrice()
    {
        $totalPrice = 0;
        foreach ($this->items as $item) {
            $totalPrice += $item->price;
        }

        return $totalPrice;
    }
}
