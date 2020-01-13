<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('national_id')->unique();
            $table->integer('church_reg_number');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('surname');
            $table->date('date_of_birth');
            $table->integer('phone_number')->unique();
            $table->string('email')->unique();
            $table->string('occupation');
            $table->string('organization_name');
            $table->string('school');
            $table->string('course');
            $table->integer('year');
            $table->string('hbc');
            $table->string('youth_group');
            $table->string('location');
            $table->boolean('active')->default(false);
            $table->string('activation_token');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
