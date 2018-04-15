<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 15.04.18
 * Time: 8:28
 */

namespace App\Service;

use App\Contract\ProductRequestCounter;

class FileProductRequestCounter implements ProductRequestCounter
{

    public function increment(int $id): void
    {
        // TODO: Implement increment() method.
    }
}