<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('loan_detail', function (Blueprint $table) {
        $table->id();
        $table->foreignId('loan_id')->constrained('loans')->onDelete('cascade');
        $table->foreignId('book_id')->constrained('books')->onDelete('cascade');
        $table->boolean('is_return')->default(false);
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('loan_detail');
}

};