<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 15.04.18
 * Time: 8:05
 */

namespace App\Driver;

use App\Contract\CacheDriver;

final class FileCacheDriver implements CacheDriver
{

    public function get(int $key): string
    {
        // TODO: Implement get() method.
        return null;
    }

    public function set(int $key, string $value): void
    {
        // TODO: Implement set() method.
        return true;
    }
}