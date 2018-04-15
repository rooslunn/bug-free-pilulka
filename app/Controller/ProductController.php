<?php
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 15.04.18
 * Time: 7:52
 */

namespace App\Controller;

use App\UseCase\FindProductUseCase;

final class ProductController
{
    private $useCase;

    public function __construct(FindProductUseCase $useCase)
    {
        $this->useCase = $useCase;
    }

    public function getDetailById(int $id): string
    {
        $product = $this->useCase->getProductById($id);
        return json_encode($product);
    }
}