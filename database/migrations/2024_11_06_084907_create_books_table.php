<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->string('title', 255);
        $table->string('author', 255);
        $table->year('year');
        $table->string('publisher', 255);
        $table->string('city', 255);
        $table->string('cover')->nullable();
        $table->foreignId('bookshelfs_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('books');

}

};