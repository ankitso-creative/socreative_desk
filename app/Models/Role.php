<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'name',
        'role_id',
        'email',
        'email_verified_at',
        'password',
        'phone',
        'assign_project',
        'status',
    ];
}
