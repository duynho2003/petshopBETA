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
        Schema::create('specification_type_monitors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained()->default(1);
            $table->foreignId('product_id')->constrained();
            $table->string('Screen_Size')->nullable();
            $table->string('Resolution')->nullable();
            $table->string('Panel_Type')->nullable();
            $table->string('Refresh_Rate')->nullable();
            $table->string('Aspect_Ratio')->nullable();
            $table->string('Brightness')->nullable();
            $table->string('Color_Gamut')->nullable();
            $table->string('Inputs_Outputs')->nullable();
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
        Schema::dropIfExists('specification_type_monitors');
    }
};
