<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('number')->nullable();
            $table->foreignId('book_id')
                ->index()
                ->constrained('books');
            $table->enum('payment', ['contract', 'receipt'])->default('contract');
            $table->enum('status', ['standing_by', 'in_work', 'in_archive'])->default('standing_by');
            $table->string('deadline')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
