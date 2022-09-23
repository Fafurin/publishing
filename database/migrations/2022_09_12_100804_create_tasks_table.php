<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('user_id')
                ->index()
                ->constrained('users');
            $table->foreignId('order_id')
                ->index()
                ->constrained('orders');
            $table->foreignId('status_id')
                ->index()
                ->constrained('statuses');
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
        Schema::dropIfExists('tasks');
    }
};
