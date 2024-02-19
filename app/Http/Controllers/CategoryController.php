<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
        echo "abc";
    }

    public function index()
    {

        $categories = $this->categoryRepository->all();
        dd($categories);

        return view('categories.index', compact('categories'));
    }

}
