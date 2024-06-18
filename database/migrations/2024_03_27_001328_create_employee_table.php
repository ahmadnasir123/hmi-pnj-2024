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
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->nullable()->index('fk_employee_to_category');
            $table->string('name');
            $table->string('angkatan');
            $table->string('lk1');
            $table->string('tahun_1');
            $table->string('lk2')->nullable();
            $table->string('tahun_2')->nullable();
            $table->string('lk3')->nullable();
            $table->string('tahun_3')->nullable();
            $table->longText('photo')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
