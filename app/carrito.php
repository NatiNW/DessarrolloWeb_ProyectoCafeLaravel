<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class carrito extends Model
{
    public $table="carrito";
    public $timestamps="false";
    public $guarded=[];

    public function producto()
    {
      return $this->belongsTo(Producto::class, 'id_producto');
    }

    public function usuario(){
        return $this->belongsTo(User::class,'id_user');
    }


}
