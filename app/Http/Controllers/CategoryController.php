<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('q', '');
        $page = $request->get('page', 1);
        $perPage = 10;

        $categories = Category::where('name', 'LIKE', "%{$query}%")
            ->orderBy('name')
            ->paginate($perPage, ['*'], 'page', $page);

        $results = $categories->map(function ($category) {
            return [
                'id' => $category->id,
                'text' => $category->name,
            ];
        });

        return response()->json([
            'items' => $results,
            'pagination' => [
                'more' => $categories->hasMorePages()
            ]
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name'
        ]);

        $category = Category::create($validated);

        return response()->json([
            'id' => $category->id,
            'text' => $category->name
        ]);
    }
}
