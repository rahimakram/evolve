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
            $table->string('day')->nullable()->after('activity_ids');
            $table->decimal('monthly_pass_price', 8, 2)->nullable()->after('image');
            $table->decimal('single_pass_price', 8, 2)->nullable()->after('monthly_pass_price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('timelines', function (Blueprint $table) {
            $table->dropColumn('day');
            $table->dropColumn('monthly_pass_price');
            $table->dropColumn('single_pass_price');
        });
    }
};
