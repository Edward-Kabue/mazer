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
        Schema::create('deals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('value');
            $table->decimal('probability');
            $table->date('expected_close_da');
            $table->string('notes');
            $table->unsignedBigInteger('contact_id');
            $table->unsignedBigInteger('organization_id');
            $table->unsignedBigInteger('deal_stage_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deals');
    }
};
