<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\CategoryTranslations;

class CategorieController extends Controller
{
    public function show($country)
    {
        $category = CategoryTranslations::where('country', $country)->get();
                if (!$category) {
            return response()->json([
                'success' => false,
                'message' => 'Category not found '
            ], 400);
        }

        return response()->json([
            'success' => true,
            'data' => $category->toArray()
        ], 200);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'country' => 'required|',
            'name' => 'required|',
        ]);

        $categorie = Categories::create()->translations()->createMany($request->all());

        if ($categorie) {
            return response()->json([
                'success' => true,
                'data' => $categorie->toArray()
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Category not added'
            ], 500);
        }
    }
}
