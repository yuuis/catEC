<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = array("usre_id", "product_id");
}
