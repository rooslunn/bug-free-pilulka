<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 15.04.18
 * Time: 8:02
 */

namespace App\Driver;

use App\Contract\ProductRepositoryDriver;
use App\Model\Product;

final class MySQLDriver implements ProductRepositoryDriver
{

    /**
     * @param int $id
     * @return array
     */
    public function findById(int $id): array
    {
        return Product::stub();
    }
}