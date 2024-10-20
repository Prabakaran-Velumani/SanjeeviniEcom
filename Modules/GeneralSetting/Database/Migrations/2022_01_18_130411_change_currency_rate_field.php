<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class ChangeCurrencyRateField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // DB::statement("ALTER TABLE `currencies` CHANGE `convert_rate` `convert_rate` DOUBLE NOT NULL DEFAULT '0.00000000';");
        DB::statement("ALTER TABLE currencies ALTER COLUMN convert_rate TYPE NUMERIC(16, 8) USING convert_rate::NUMERIC(16, 8);");
        DB::statement("ALTER TABLE currencies ALTER COLUMN convert_rate SET DEFAULT 0.00000000;");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
