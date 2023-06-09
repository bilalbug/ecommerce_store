<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class custom_user extends Model
{
    use HasFactory;
    protected $fillable = ['role', 'username', 'email', 'password', 'first_name', 'last_name', 'phone', 'address'];
}
