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
        Schema::table('management', function (Blueprint $table) {
            $table->foreign('category_id', 'fk_management_to_category')
                ->references('id')->on('category_id')->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('management', function (Blueprint $table) {
            $table->dropForeign('fk_management_to_category');
        });
    }
};