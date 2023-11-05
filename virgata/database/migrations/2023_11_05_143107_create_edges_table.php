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
        Schema::create('edges', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('edges');
    }
};
Schema::create('edges', function (Blueprint $table) {
    $table->id();
    $table->foreignId('from_node_id')->constrained('nodes')->onDelete('cascade');
    $table->foreignId('to_node_id')->constrained('nodes')->onDelete('cascade');
    $table->string('type');
    $table->integer('weight')->default(0);
    $table->timestamps();
});
