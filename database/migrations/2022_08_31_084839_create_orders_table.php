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
            $table->foreignId('customer_id')
                ->index()
                ->constrained('customers');
            $table->foreignId('book_id')
                ->index()
                ->constrained('books');
            $table->enum('payment', ['contract', 'receipt'])->default('contract');
            $table->foreignId('status_id')
                ->default(1)
                ->index()
                ->constrained('statuses');
            $table->string('deadline')->nullable();
            $table->text('description')->nullable();
            $table->date('started_at')->default(null);
            $table->date('finished_at')->default(null);
            $table->softDeletes();
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
