<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('estart_date')->nullable(); // Changed to DATE
            $table->date('sstart_date')->nullable(); // Changed to DATE
            $table->string('job_title');
            $table->string('employment_type');
            $table->string('team')->nullable();
            $table->string('line_manager')->nullable();
            $table->string('office_name')->nullable();
            $table->bigInteger('salary_amount')->default(0);
            $table->string('salary_frequency')->nullable();
            $table->string('image_photo_url')->nullable();
            $table->foreignId('department_id')->constrained('departments')->onDelete('cascade'); // Foreign key reference
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
