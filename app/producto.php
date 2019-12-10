<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
  public $table="productos";
  public $primaryKey="ID";
  public $timestamps="false";
  public $guarded=[];

}
