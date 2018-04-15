<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 15.04.18
 * Time: 8:03
 */

namespace App\Contract;


interface CacheDriver
{
    public function get(int $key): string;
    public function set(int $key, string $value): void;
}