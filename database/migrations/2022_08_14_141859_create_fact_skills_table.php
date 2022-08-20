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
        Schema::create('fact_skills', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->integer('fact');
            $table->integer('fact2');
            $table->integer('fact3');
            $table->integer('fact4');
            $table->text('description2')->nullable();
            $table->integer('status')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('fact_skills');
    }
};
