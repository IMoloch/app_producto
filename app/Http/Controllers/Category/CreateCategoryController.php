<?php

namespace App\Http\Controllers\Category;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // Import the base Controller
use App\Models\Category;

class CreateCategoryController extends Controller // Extend the base Controller
{
    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create($data);

        return redirect()->route('categories.index');
    }
}

