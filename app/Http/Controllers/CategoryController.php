<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function store(Request $request)
    {
        $Category = Category::create($request->all());

        return response()->json($Category, 201);
    }

    public function show($id)
    {
        $Category = Category::find($id);

        if (!$Category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        return $Category;
    }

    public function update(Request $request, $id)
    {
        $Category = Category::find($id);

        if (!$Category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        $Category->update($request->all());

        return response()->json($Category, 200);
    }

    public function destroy($id)
    {
        $Category = Category::find($id);

        if (!$Category) {
            return response()->json(['message' => 'Category not found'], 404);
        }

        $Category->delete();

        return response()->json(['message' => 'Category deleted'], 204);
    }
}
