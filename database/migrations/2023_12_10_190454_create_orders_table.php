<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
        
            
            $table->id();
            $table->string('professeur');
            $table->string('impression_type');
            $table->string('filiere');
            $table->integer('ncopies');
            $table->string('format');
            $table->string('print_type');
            $table->string('color');
            $table->string('print_style');
            $table->datetime('datetime');
            $table->string('pdf_path');
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
        Schema::dropIfExists('orders');
    }
}
