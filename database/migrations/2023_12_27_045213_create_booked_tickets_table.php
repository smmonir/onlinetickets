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
        Schema::create('booked_tickets', function (Blueprint $table) {
        $table->id();
        $table->date('journy_date');
        $table->string('from_station', 100);
        $table->string('to_station', 100);
        $table->foreign('user_id')->references('id')->on('users')
        ->cascadeOnUpdate()->restrictOnDelete();
        $table->foreign('seat_id')->references('id')->on('seats')
        ->cascadeOnUpdate()->restrictOnDelete();

        $table->timestamp('created_at')->useCurrent();
        $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booked_tickets');
    }
};
