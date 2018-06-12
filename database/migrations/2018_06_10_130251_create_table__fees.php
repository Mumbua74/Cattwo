<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateTableFees extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
Schema::create('Fees', function (Blueprint $table) {
$table->increments('id');
$table->string('student_number');
$table->string('full_name');
$table->string('date_of_payment');
$table->string('amount');
$table->timestamps();
});
//
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