<?php

namespace App\Models\Package;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package_service extends Model
{
    use HasFactory;
    protected $fillable = ['package_id', 'service','status'];
}
