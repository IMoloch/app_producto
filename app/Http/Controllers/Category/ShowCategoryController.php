<?php

namespace App\Http\Controllers\Category;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // Import the base Controller
use App\Models\Category;

class ShowCategoryController extends Controller // Extend the base Controller
{
    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }
}
