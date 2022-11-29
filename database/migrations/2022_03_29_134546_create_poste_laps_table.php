<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosteLapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poste_laps', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('DevPost');
            $table->text('Description');
            $table->date('Day_s');
            $table->date('Day_f');
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
        Schema::dropIfExists('poste_laps');
    }
}
