<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductApiControllerV4 extends Controller
{
    public function save(Request $request): JsonResponse
    {
        Product::validate($request);
        Product::create($request->only(['name', 'price']));

        return response()->json([
            'message' => 'Product created successfully',
        ], 201);
    }
}
