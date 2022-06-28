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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();

            $table->string('t_name',40);

            $table->string('t_phone',200)->unique();

            $table->string('t_address',200);

            $table->string('t_username',20)->unique();

            $table->string('t_email',50)->unique();

            $table->string('t_password',20);

            $table->string('t_dept',30);

            $table->string('t_profileimg',250);
            
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
        Schema::dropIfExists('teachers');
    }
};
