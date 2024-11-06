<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('returns', function (Blueprint $table) {
        $table->id();
        $table->foreignId('loan_detail_id')->constrained('loan_detail')->onDelete('cascade');
        $table->boolean('charge');
        $table->integer('amount')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('returns');
}

};
