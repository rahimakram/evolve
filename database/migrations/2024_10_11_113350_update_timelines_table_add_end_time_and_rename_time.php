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
        Schema::table('timelines', function (Blueprint $table) {
            // Rename the 'time' column to 'start_time'
            $table->renameColumn('time', 'start_time');

            // Add the new 'end_time' column
            $table->time('end_time')->nullable()->after('start_time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('timelines', function (Blueprint $table) {
            // Rollback the changes by renaming 'start_time' back to 'time'
            $table->renameColumn('start_time', 'time');

            // Remove the 'end_time' column
            $table->dropColumn('end_time');
        });
    }
};
