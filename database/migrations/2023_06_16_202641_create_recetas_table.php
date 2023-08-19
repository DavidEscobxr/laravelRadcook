<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas', function (Blueprint $table) {
            $table->id();
            $table->string('description',100);
            $table->timestamps();
            

        $table->unsignedBigInteger('id_ingredientes')->unique();
        
        $table ->foreign('id_ingredientes')
        ->references('id')
        ->on('ingredientes')
        ->onDelete('cascade')
        ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recetas');
    }
    


}
