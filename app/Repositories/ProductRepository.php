<?php
namespace App\Repositories;

use App\Models\Product;

class ProductRepository extends EloquentRepository implements ProductRepositoryInterface
{
    public function __construct(Product $productModel)
    {
        parent::__construct($productModel);
    }

}
