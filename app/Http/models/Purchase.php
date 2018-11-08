<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Purchase;
use App\Http\Models\User;

class Purchase extends Model
{
    protected $fillable = array("user_id", "product_id");

    public function user() {
        return $this->belongsTo('App\Http\Models\User');
    }

    public function product() {
        return $this->belongsTo('App\Http\Models\Product');
    }
}
