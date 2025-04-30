<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Employee extends Authenticatable 
{
    use HasFactory, Notifiable;

    protected $table = 'employees';

    protected $fillable = [
        'employee_code',
        'first_name',
        'last_name',
        'father_name',
        'mobile',
        'email',
        'password',
        'adhar_no',
        'pan_no',
        'address',
        'UAN',
        'esic_detail',
        'ifsc_detail',
        'account_no',
        'dob',
        'date_of_joining',
        'job_title',
        'line_manager',
        'office_name',
        'image_photo_url',
        'department_id',
    ];

    protected $hidden = [
        'password',
    ];
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'employee_role', 'employee_id', 'role_id');
    }

    public function leaves()
    {
        return $this->hasMany(Leave::class, 'leave_id');
    }
    
    
}
