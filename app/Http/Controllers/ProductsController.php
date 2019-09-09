<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('year', 'ASC')->get();
        return response()->json($products);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'year' => $request->year,
            'price' => $request->price
        ]);
        return response()->json(['success' => 'The product was created successfully!']);
    }
}
