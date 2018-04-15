<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 15.04.18
 * Time: 8:06
 */

namespace App\UseCase;

use App\Contract\{
    ProductRepositoryDriver,
    CacheDriver,
    ProductRequestCounter
};

final class FindProductUseCase
{
    private $productRepository;

    private $cacheDriver;

    private $counter;

    public function __construct(ProductRepositoryDriver $repository, CacheDriver $cache, ProductRequestCounter $counter)
    {
        $this->productRepository = $repository;
        $this->cacheDriver = $cache;
        $this->counter = $counter;
    }

    public function getProductById(int $id): array
    {

        if (! $product = $this->cacheDriver->get($id)) {
            $product = $this->productRepository->findById($id);
            $this->cacheDriver->set($id, json_encode($product));
        }

        $this->counter->increment($id);

        return $product;
    }
}