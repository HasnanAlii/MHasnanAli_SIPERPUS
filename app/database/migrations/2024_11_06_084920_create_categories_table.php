<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_book_category_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->foreignId('id')->constrained('books');
            $table->string('category',255);
           
           
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
};