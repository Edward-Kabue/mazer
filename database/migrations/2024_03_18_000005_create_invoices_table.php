<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('invoice_number');
            $table->date('invoice_date');
            $table->date('due_date');
            $table->decimal('total');
            $table->unsignedBigInteger('contact_id');
            $table->unsignedBigInteger('quote_id');
            $table->unsignedBigInteger('organization_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
