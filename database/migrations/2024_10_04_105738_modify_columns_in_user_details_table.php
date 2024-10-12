<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('user_details', function (Blueprint $table) {
            $table->string('specialization', 250)->change();
            $table->string('special_focus_area', 550)->change();
            $table->string('classes', 550)->change();
            $table->string('certifications', 550)->change();
            $table->string('languages', 550)->change();
            $table->string('experience', 550)->change();
            $table->string('education', 550)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_details', function (Blueprint $table) {
            // Revert the column lengths to the default or previous length (255 in this case)
            $table->string('specialization', 191)->change();
            $table->string('special_focus_area', 191)->change();
            $table->string('classes', 191)->change();
            $table->string('certifications', 191)->change();
            $table->string('languages', 191)->change();
            $table->string('experience', 191)->change();
            $table->string('education', 191)->change();
        });
    }
};
