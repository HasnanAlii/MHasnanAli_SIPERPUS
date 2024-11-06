<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bookshelfs', function (Blueprint $table) {
            $table->id();
            $table->string('code', 10);
            $table->string('name', 255);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('bookshelfs');
    }
    
};
