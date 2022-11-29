<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelH extends Model
{
    use HasFactory;
    protected $fillable=['Name','DevPost','Description','Day_s','Day_f'];
}
