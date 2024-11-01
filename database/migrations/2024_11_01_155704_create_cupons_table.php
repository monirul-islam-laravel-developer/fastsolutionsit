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
        Schema::create('cupons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('discount_price');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->date('expire_date')->nullable();
            $table->string('count')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1 is active , 0 is inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cupons');
    }
};
