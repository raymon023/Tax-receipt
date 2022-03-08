<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment_vouchers', function (Blueprint $table) {
            $table->id();
            $table->string('approval number');
            $table->date('date received');
            $table->date('valid_up_to');
            $table->integer('quantity');
            $table->string('last number')->nullable();



            $table->foreignId('voucher_id')->constrained();
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
        Schema::dropIfExists('assignment_vouchers');
    }
}
