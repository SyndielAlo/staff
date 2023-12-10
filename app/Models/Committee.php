<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{ 
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'id',
        'username',
        'name',
        'Committee',
        'Position',
        'admin',
        'Period',
        'image',
        'Status',
        'file',
        'rights',
        'module',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
    ];
}
