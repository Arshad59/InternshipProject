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
        Schema::create('research', function (Blueprint $table) {
            $table->id();
            $table->string("research_topic",100);
            $table->string("subtitle1",50)->nullable();
            $table->string("description1",2000)->nullable();
            $table->string("subtitle2",50)->nullable();
            $table->string("description2",2000)->nullable();
            $table->string("subtitle3",50)->nullable();
            $table->string("description3",1500)->nullable();
            $table->string("subtitle4",50)->nullable();
            $table->string("description4",1500)->nullable();
            $table->string("subtitle5",50)->nullable();
            $table->string("description5",1500)->nullable();
            $table->string("subtitle6",50)->nullable();
            $table->string("description6",1500)->nullable();
            $table->string("subtitle7",50)->nullable();
            $table->string("description7",1500)->nullable();
            $table->string("subtitle8",50)->nullable();
            $table->string("description8",1000)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('research');
    }
};
