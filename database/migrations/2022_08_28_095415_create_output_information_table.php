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
        Schema::create('output_information', function (Blueprint $table) {
            $table->id();
            $table->string('isbn')->nullable();
            $table->integer('circulation')->nullable();
            $table->date('publication_date')->nullable();
            $table->decimal('conv-print_sheets')->nullable()->comment('Усл.-печ. листы');
            $table->decimal('publishing_sheets')->nullable()->comment('Уч.-изд. листы');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('output_information');
    }
};
