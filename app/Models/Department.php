<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';

    protected $fillable = [
        'department_name',
        'contact_email',
        'number_of_employees',
        'head_of_department',
        'established_date',
        'department_code'
    ];

    public function employees()
    {
        return $this->hasMany(Employee::class, 'department_id');
    }
}
