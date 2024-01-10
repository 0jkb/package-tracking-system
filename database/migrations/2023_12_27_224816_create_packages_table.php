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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('tracker_number');
            $table->foreignId('container_id')->nullable()->constrained('containers');
            $table->foreignId('package_type_id')->constrained('package_types');
            $table->foreignId('customer_id')->nullable()->constrained('customers');
            $table->foreignId('shipping_type_id')->constrained('shipping_types');
            $table->foreignId('shipping_type_state_id')->constrained('shipping_type_states');
            $table->foreignId('delivered_by')->nullable()->constrained('users');
            $table->string('size');
            $table->decimal('price', 8, 2);
            $table->integer('ctn')->nullable();;
            $table->decimal('weight', 8, 2)->nullable();;
            $table->text('notes')->nullable();
            $table->boolean('is_collected')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
