<?php

namespace App\Http\Controllers\Category;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller; // Import the base Controller
use App\Models\Category;

class EditCategoryController extends Controller // Extend the base Controller
{
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->update($data);

        return redirect()->route('categories.index');
    }
}

