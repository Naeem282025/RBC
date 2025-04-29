<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $table = 'leaves'; 

    protected $fillable = [
        'leave_type',
        'from_date',
        'to_date',
        'applied_date',
        'reason',
        'status',
        'employee_id'
    ];

    protected $casts = [
        'from_date' => 'date',
        'to_date' => 'date',
        'applied_date' => 'date',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class,'employee_id');
    }
}
