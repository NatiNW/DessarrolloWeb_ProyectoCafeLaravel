<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('productos', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('nombreProducto',45);
          $table->text('descripcion');
          $table->decimal('precio', 12, 2);
          $table->integer('stock');
          $table->string('foto',45);
          $table->string('categoria',45);
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
