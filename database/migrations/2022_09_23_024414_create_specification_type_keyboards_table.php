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
        Schema::create('specification_type_keyboards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained()->default(1);
            $table->foreignId('product_id')->constrained();
            $table->string('Interface')->nullable();
            $table->string('Size')->nullable();
            $table->string('LED')->nullable();
            $table->string('Switch')->nullable();
            $table->string('Keycap')->nullable();
            $table->string('Compatibility')->nullable();
            $table->string('Weight')->nullable();
            $table->string('Dimensions')->nullable();
            $table->boolean('active')->default(1);
            $table->softDeletes();
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
        Schema::dropIfExists('specification_type_keyboards');
    }
};
