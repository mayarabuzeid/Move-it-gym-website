<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userorder extends Model
{
    use HasFactory;
    public $table='user_product';
    public $timestamps=false;
}
