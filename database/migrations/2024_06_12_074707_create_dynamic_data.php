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
        Schema::create('dynamic_data', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('dynamic_row_id');
            $table->uuid('dynamic_column_id');
            $table->text('value');
            $table->timestamps();

            $table->foreign('dynamic_row_id')->references('id')->on('dynamic_rows')->onDelete('cascade');
            $table->foreign('dynamic_column_id')->references('id')->on('dynamic_columns')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dynamic_data');
    }
};
