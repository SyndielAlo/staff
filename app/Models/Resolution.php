<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resolution extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'res_number',
        'agenda',
        'res_date',
        'status',
        'encoded_by',
        'encodedByDate',
        'created_at',
       
    ];
}
