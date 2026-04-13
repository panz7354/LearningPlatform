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
        Schema::create('quiz_page', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained('users')->OnDelete('cascade')->onUpdate('cascade');
            $table->integer('unit_no');
            $table->string('q_type', 10);
            $table->text('question_text');
            $table->text('options');
            $table->string('correct_answer',50);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_page');
    }
};
