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
        Schema::create('company_incomes', function (Blueprint $table) {
            $table->id();
            $table->string('month_year')->unique();
            $table->integer('monthly_income');
            $table->integer('spirit_sales');
            $table->integer('spirit_sales_target');
            $table->integer('spirit_sales_bonus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_incomes');
    }
};
