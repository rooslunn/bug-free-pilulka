<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 15.04.18
 * Time: 7:56
 */

namespace App\Contract;


interface ProductRepositoryDriver
{
    public function findById(int $id): array;
}