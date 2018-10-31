<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Purchase;
use App\Http\Models\Product;
use App\Http\Models\User;

class AdminController extends Controller
{
    public function productsIndex() {
        $products = Product::all();
        return view("admin.products_index", compact("products"));
    }

    public function purchasesIndex() {
        $purchases = Purchase::allTupled();
        return view("admin.purchases_index", compact("purchases"));
    }
}
