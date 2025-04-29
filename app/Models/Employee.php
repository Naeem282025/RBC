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
        'first_name',
        'last_name',
        'email',
        'password',
        'estart_date',
        'sstart_date',
        'job_title',
        'employment_type',
        'team',
        'line_manager',
        'office_name',
        'salary_amount',
        'salary_frequency',
        'image_photo_url',
        'department_id'
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'salary_amount' => 'float',
        'estart_date' => 'date',
        'sstart_date' => 'date',
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
