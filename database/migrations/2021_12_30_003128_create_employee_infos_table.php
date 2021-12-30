<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_infos', function (Blueprint $table) {
        $table->increments('id');
        $table->binary('photo');
        $table->string('name', 60);
        $table->string('department',100);
        $table->enum('gender', ['M', 'F','O']);
        $table->date('dob');
        $table->text('address');
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
        Schema::dropIfExists('employee_infos');
    }
}
