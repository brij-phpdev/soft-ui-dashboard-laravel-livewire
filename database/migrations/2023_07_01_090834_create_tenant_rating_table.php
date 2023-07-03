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
        Schema::create('tenant_rating', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('rating'); // worst=>1 bad=>2 fair=>3
            $table->tinyInteger('property_issues'); // Rent arrears =>1 Subletting=>2 Behavior=>3 Late payment => 4 Farming => 5 Drugs => 6
            $table->string('rating_description')->nullable();
            $table->integer('testimonial_by')->nullable();
            $table->timestamp('testimonial_at')->useCurrent();
            $table->integer('property_owner_id')->nullable(); // user id , landlord ID
            $table->integer('property_id')->nullable();
            $table->integer('tenant_id')->nullable();
            $table->timestamp('property_rented_from')->nullable();
            $table->timestamp('property_rented_till')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenant_rating');
    }
};
