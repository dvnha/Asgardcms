<?php

namespace Modules\Products\ValueObjects;

use Doctrine\ORM\Mapping as ORM;

/** @ORM\Embeddable */
class Product
{
    public function __construct()
    {
        // Implement stub method
    }

    public function __toString()
    {
        return ''; // Implement stub method
    }
}
