<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConvertedInteger extends Model
{
    use HasFactory;

    protected $fillable = ['integer', 'converted'];
}
