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
        Schema::create('dynamic_rows', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('dynamic_table_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('dynamic_table_id')->references('id')->on('dynamic_tables')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dynamic_rows');
    }
};
