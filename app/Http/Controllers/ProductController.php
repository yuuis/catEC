<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Product;

class ProductController extends Controller
{
    public function index() {
      $products = Product::all();
      return view("products.index", compact("products"));
    }

    public function show ($id) {
      $product = Product::where("id", $id)->first();
      return view("products.show", compact("product"));
    }
}
