<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = array("name", "email", "phone_number", "address");
}
