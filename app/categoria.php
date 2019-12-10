<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
  public $table="categorias";
  public $primaryKey="ID";
  public $timestamps="false";
  public $guarded=[];

}
