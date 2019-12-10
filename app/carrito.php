<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carrito extends Model
{
    public $table="shop";
    public $primaryKey="id";
    public $timestamps="false";
    public $guarded=[];

}
