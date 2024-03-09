<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile'];
    
    use HasFactory;
}
