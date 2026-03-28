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
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); //id autoincremental

            $table->unsignedBigInteger('order_number')->unique(); // numero aleatorio

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // relacion con usuario

            $table->date('date');
            $table->string('rfc', 20);
            $table->string('address', 150);
            $table->enum('status', ['Process', 'Completed', 'Cancelled'])->default('Process');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};