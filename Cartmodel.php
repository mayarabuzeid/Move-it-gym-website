<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cartmodel extends Model
{
    use HasFactory;
    public $table='orders';
    protected $primarykey='order_id';
    public $timestamps=false;
}
