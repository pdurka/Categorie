<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\CategoryTranslations;

class CategorieController extends Controller
{
    public function show($country)
    {
        return CategoryTranslations::where('country', $country)->get();
    }

    public function store(Request $request)
    {
//        $payload = [
//            [
//                'country' => 'PL',
//                'name' => 'Wody',
//            ],
//            [
//                'country' => 'EN',
//                'name' => 'Water',
//            ]
//        ];
//
//        print_r( json_encode($payload) );
//
//        die;

        $categorie = Categories::create()->translations()->createMany($request->all());

        return response()->json($categorie, 201);
    }
}
