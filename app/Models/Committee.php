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
        'name',
        'Committee', 
        'Position', 
        'Period',
        'Photo',
        'Status',
    ];
}
