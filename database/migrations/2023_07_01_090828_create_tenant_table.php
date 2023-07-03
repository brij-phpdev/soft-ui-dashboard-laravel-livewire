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
        Schema::create('tenant', function (Blueprint $table) {
            $table->id();
            $table->string('tenant_name');
            $table->string('tenant_photo')->nullable();
            $table->string('tenant_phone')->nullable();
            $table->string('tenant_email')->nullable();
            $table->date('tenant_dob')->nullable();
            $table->string('tenant_passport')->nullable();
            $table->string('tenant_passport_img')->nullable();
            $table->string('tenant_dl_number')->nullable();
            $table->string('tenant_dl_number_img')->nullable();
            $table->string('tenant_ni_number')->nullable();
            $table->string('tenant_ni_number_img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenant');
    }
};
