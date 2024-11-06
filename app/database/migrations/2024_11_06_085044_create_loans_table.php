<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('loans', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->date('loan_at');
        $table->date('return_at')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('loans');
}

};
