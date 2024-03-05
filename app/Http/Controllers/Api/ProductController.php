<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function index()
    {
        //$products = Product::with('category')->get();
        $products = Product::with('category')->paginate(5);

        //return $products;
        return ProductResource::collection($products);
    }
}
