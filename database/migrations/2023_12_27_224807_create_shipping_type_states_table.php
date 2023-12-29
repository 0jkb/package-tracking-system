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
        Schema::create('shipping_type_states', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shipping_type_id')->nullable()->constrained('shipping_types');
            $table->foreignId('main_shipping_type_state_id')->nullable()->constrained('main_shipping_type_states')->onDelete('set null');

            $table->string('status_name');
            $table->string('color');
            $table->string('icon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_type_states');
    }
};
