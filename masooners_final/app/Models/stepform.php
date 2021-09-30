<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stepform extends Model
{
    use HasFactory;
    public $table = 'stepform';
    protected $fillable = [
        'location',
        'email',
        'name',
        'purpose',
        'service',
        'appartment',
        'created_at',
    ];

    protected $dates = [
        'created_at',
    ];

}
