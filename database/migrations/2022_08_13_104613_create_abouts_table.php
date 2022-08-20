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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->string('title');
            $table->text('description2')->nullable();
            $table->date('Birthday')->nullable();
            $table->integer('Age')->nullable();
            $table->string('Website')->nullable();
            $table->string('Degree')->nullable();
            $table->integer('Phone')->nullable();
            $table->string('Email')->nullable();
            $table->string('OldCity')->nullable();
            $table->string('City')->nullable();
            $table->string('Freelance')->nullable();
            $table->text('description3')->nullable();
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
        Schema::dropIfExists('abouts');
    }
};
