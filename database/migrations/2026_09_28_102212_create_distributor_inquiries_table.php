<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('distributor_inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('company', 150)->nullable();
            $table->string('phone', 30);
            $table->string('email', 150);
            $table->string('city', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('business_type', 100)->nullable();
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('distributor_inquiries');
    }
};