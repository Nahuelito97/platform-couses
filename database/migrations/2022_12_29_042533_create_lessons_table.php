<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('url');
            $table->string('ifrma');

            $table->unsignedBigInteger('plataform_id')->nullable();
            $table->unsignedBigInteger('section_id');


            $table->foreign('plataform_id')->references('id')->on('platforms')->odDelete('set null');
            $table->foreign('section_id')->references('id')->on('sections')->odDelete('cascade');

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
        Schema::dropIfExists('lessons');
    }
};
