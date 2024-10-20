<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubSellerAccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('sub_seller_accesses')){
            Schema::create('sub_seller_accesses', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('user_id');
                $table->bigInteger('permission_id');
                $table->timestamps();
            });

        }


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_seller_accesses');
    }
}
