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
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('mobile_number');
            $table->string('email',100)->nullable();
            $table->string('identity_number',100)->nullable();
            $table->string('bank_iban',100)->nullable();
            $table->string('bank_name')->nullable();
            $table->string('city');
            $table->smallInteger('stocks');
            $table->text('notes')->nullable();
            $table->boolean('seen')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_messages');
    }
};
