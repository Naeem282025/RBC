<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Register extends Authenticatable
{
    use HasFactory ,Notifiable ;
    protected $table = 'registers'; // ✅ Telling Laravel to use the `registers` table

    protected $fillable = ['name', 'email', 'password', 'image_photo_url'];

    protected $hidden = ['password'];
    // ✅ One-Sided Many-to-Many (Only Register References Roles)
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'register_role', 'register_id', 'role_id');
    }
    public function hasRole($role)
    {
        return $this->roles->contains('name', $role);
    }
}
