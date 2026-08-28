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
        Schema::table('quiz_result', function (Blueprint $table) {
            $table->tinyInteger('effort_score')->nullable()->after('score');
        });
    }

    public function down(): void
    {
        Schema::table('quiz_result', function (Blueprint $table) {
            $table->dropColumn('effort_score');
        });
    }
};
