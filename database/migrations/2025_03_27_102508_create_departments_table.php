<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id(); 
            $table->string('department_name');
            $table->string('contact_email');
            $table->integer('number_of_employees');
            $table->string('head_of_department');
            $table->date('established_date'); // Changed to DATE
            $table->string('department_code');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('departments');
    }
};
