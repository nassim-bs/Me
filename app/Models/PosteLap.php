<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PosteLap extends Model
{
    use HasFactory;
    protected $table = 'poste_laps';
    protected $fillable = [
        'Name',
        'DevPost',
        'Description',
        'Day_s',
        'Day_f',
    ];
}
