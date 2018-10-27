<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Purchase;
use App\Http\Models\User;

class Purchase extends Model
{
    protected $fillable = array("usre_id", "product_id");

    public static function allTupled() {
        $purchases = Purchase::all();
        $iterator = 0;
        $tuple = [];
        foreach ($purchases as $purchase) {
            $tuple[$iterator] = [User::where("id", $purchase->user_id)->first(), Product::where("id", $purchase->product_id)->first()];
            $iterator++;
        }
        return $tuple;
    }
}
