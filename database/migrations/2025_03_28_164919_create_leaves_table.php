<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')
                  ->constrained('employees')
                  ->onDelete('cascade'); // Foreign key to employees table
            $table->string('leave_type');
            $table->date('from_date');
            $table->date('to_date');
            $table->date('applied_date');
            $table->text('reason')->nullable();
            $table->string('status')->default('PENDING'); // Default status set to PENDING
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
        Schema::dropIfExists('leaves');
    }
};
