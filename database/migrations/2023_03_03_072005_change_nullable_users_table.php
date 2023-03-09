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
        Schema::table('users', function (Blueprint $table) {
            $table->text('address_one')->nullable()->change();
            $table->text('address_two')->nullable()->change();
            $table->integer('zip_code')->nullable()->change();
            $table->string('country')->nullable()->change();
            $table->string('phone_number')->nullable()->change();
            $table->boolean('store_status')->nullable()->change();
            $table->string('store_name')->nullable()->change();
            $table->foreignId('categories_id')->nullable()->change();
            $table->foreignId('provinces_id')->nullable()->change();
            $table->foreignId('regencies_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('address_one')->nullable(false)->change();
            $table->text('address_two')->nullable(false)->change();
            $table->integer('zip_code')->nullable(false)->change();
            $table->string('country')->nullable(false)->change();
            $table->string('phone_number')->nullable(false)->change();
            $table->boolean('store_status')->nullable(false)->change();
            $table->string('store_name')->nullable(false)->change();
            $table->foreignId('categories_id')->nullable(false)->change();
            $table->foreignId('provinces_id')->nullable(false)->change();
            $table->foreignId('regencies_id')->nullable(false)->change();
        });
    }
};
