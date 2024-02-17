<?php
namespace App\Repositories;

use App\Models\Category;

class CategoryRepository extends EloquentRepository implements CategoryRepositoryInterface
{
    public function __construct(Category $categoryModel)
    {
        parent::__construct($categoryModel);
    }

    public function getAll()
    {
        return $this->model->all();
    }

}
