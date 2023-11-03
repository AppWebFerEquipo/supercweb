<?php

namespace App\Http\Controllers\Categories; // Namespace should match the folder structure

use App\Http\Controllers\Controller;
use App\Models\Categories\Categories;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::all(); // Suponiendo que tienes un modelo User que representa la tabla de usuarios.

        return view('admin.categories.index', compact('categories'));
    }

}
