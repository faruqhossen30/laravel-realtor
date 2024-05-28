<?php

namespace App\Models\Testmonial;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testmonial extends Model
{
    use HasFactory;

    protected $fillable = ['review','description','name','thumbnail','designation'];
}
