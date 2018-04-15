<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 15.04.18
 * Time: 8:26
 */

namespace App\Contract;


interface ProductRequestCounter
{
    public function increment(int $id): void;
}