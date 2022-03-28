<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Вывод всех категорий из базы данных.
     *
     * @var string
     */
    public function apiCategoryAll() {

        return Category::all();
    }
}
