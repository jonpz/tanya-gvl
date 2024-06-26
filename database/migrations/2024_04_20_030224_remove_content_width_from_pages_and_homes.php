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
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn('content_width');
        });
        Schema::table('homes', function (Blueprint $table) {
            $table->dropColumn('content_width');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('content_width')->nullable();
        });
        Schema::table('homes', function (Blueprint $table) {
            $table->string('content_width')->nullable();
        });
    }
};
