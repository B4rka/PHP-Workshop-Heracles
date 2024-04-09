<?php

namespace App\Inventory;

use App\Equipable;

class Shovel implements Equipable
{
    private string $image = 'assets/images/shovel.svg';

    public function getImage(): string
    {
        return $this->image;
    }
}