<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('Professeur');
            $table->string('Impression');
            $table->string('Filiere');
            $table->integer('NCopies');
            $table->string('Format');
            $table->string('Type');
            $table->string('Couleur');
            $table->string('TImpression');
            $table->datetime('DateTime');
            $table->string('pdfFile'); // Assuming you store the file name
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
        Schema::dropIfExists('commandes');
    }
}
