<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CatalogController extends Controller
{
    public function list() {
        $products = Product::all();
        return view('catalog.list', compact('products'));
    }

    public function item(Product $product) {
        return view('catalog.item', compact('product'));
    }
}
