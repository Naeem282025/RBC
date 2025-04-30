<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); // BIGINT UNSIGNED PRIMARY KEY AUTO_INCREMENT
            $table->string('employee_code', 50)->index(); // Add index if this is often searched
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->string('father_name', 100)->nullable(); // Optional, so marked nullable
            $table->string('mobile', 15)->index(); // Max 15 chars (E.164 international format)
            $table->string('email', 150)->unique();
            $table->string('password', 255); // Needed for hashed password (e.g., bcrypt = 60 chars, but 255 allows flexibility)
            $table->string('adhar_no', 12)->unique(); // Aadhaar numbers are 12 digits
            $table->string('pan_no', 10)->unique(); // PAN is typically 10 characters
            $table->string('address', 255)->nullable();
            $table->string('UAN', 20)->nullable(); // UAN is typically 12 digits, but allow some flexibility
            $table->string('esic_detail', 30)->nullable(); 
            $table->string('ifsc_detail', 11)->nullable(); // IFSC codes are 11 characters
            $table->string('account_no', 20)->nullable(); // Bank account numbers vary, typically < 20
            $table->date('dob');
            $table->date('date_of_joining');
            $table->string('job_title', 100)->nullable();
            $table->string('line_manager', 100)->nullable();
            $table->string('office_name', 100)->nullable();
            $table->string('image_photo_url', 255)->nullable();
            
            // Foreign key with cascading delete
            $table->foreignId('department_id')->constrained('departments')->onDelete('cascade');
        
            $table->timestamps();
        });
    }        

    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
