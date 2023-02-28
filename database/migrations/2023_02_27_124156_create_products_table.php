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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price');
            $table->text('descr');
            $table->unsignedBigInteger('cat_id')->nullable();
            $table->integer('active')->default(1);
            $table->timestamps();

            $table->index('cat_id', 'product_cat_idx');
            $table->foreign('cat_id', 'product_cat_fk')->on('Categories')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
