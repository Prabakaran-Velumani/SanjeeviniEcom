<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSkuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_sku', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("product_id")->nullable();
            $table->string("sku", 250)->nullable();
            $table->decimal("purchase_price", 16,2)->default(0)->nullable();
            $table->decimal("selling_price", 16,2)->default(0);
            $table->decimal('additional_shipping', 16, 2)->default(0)->nullable();
            $table->string('variant_image')->nullable();
            $table->boolean("status")->default(1);
            $table->integer('product_stock')->default(0);
            $table->string('track_sku',250)->nullable();
            $table->timestamps();

            $table->foreign('product_id')
                ->references('id')->on('products')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_sku');
    }
}
