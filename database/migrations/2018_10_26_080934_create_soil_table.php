<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoilTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soils', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('address');
            $table->string('lat');
            $table->string('long');
            $table->enum('granulometry', ['argile', 'limons fins', 'limons grossiers', 'sables fins', 'sables grossiers', 'calcaire', 'humifère', 'all']);
            $table->tinyInteger('ph');
            $table->tinyInteger('humus_percent');

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
        Schema::dropIfExists('soils');
    }
}
