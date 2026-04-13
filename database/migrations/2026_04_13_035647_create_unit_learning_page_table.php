<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('unit_learning_page', function (Blueprint $table) {
            $table->id();

            $table->string('section_no' ,10);
            $table->string('title',100);
            $table->longText('syntax_intro'); //放html

            $table->text('ex1_title')->nullable();
            $table->text('ex1_code')->nullable();
            $table->text('ex2_title')->nullable();
            $table->text('ex2_code')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unit_learning_page');
    }
};
