<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('job_listing', function (Blueprint $table) {
            // Step 1: Update existing NULL values to a valid timestamp
            // This ensures no NULL values prevent setting NOT NULL constraint.
            // Using DB::raw('NOW()') to get the current database timestamp.
            DB::statement('UPDATE job_listing SET created_at = NOW() WHERE created_at IS NULL');
            DB::statement('UPDATE job_listing SET updated_at = NOW() WHERE updated_at IS NULL');

            // Step 2: Modify the 'created_at' column
            // We use ->change() to alter an existing column.
            // It will now be NOT NULL and default to the current timestamp.
            $table->timestamp('created_at')->useCurrent()->nullable(false)->change();

            // Step 3: Modify the 'updated_at' column
            // It will be NOT NULL, default to current timestamp, and update on every record change.
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate()->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_listing', function (Blueprint $table) {
            // Revert 'created_at' to nullable and remove default if possible
            // Note: Depending on MySQL version, removing default might require raw SQL.
            $table->timestamp('created_at')->nullable()->change();

            // Revert 'updated_at' to nullable and remove default/on update if possible
            $table->timestamp('updated_at')->nullable()->change();
        });
    }
};
