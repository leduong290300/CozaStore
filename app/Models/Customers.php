<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Customers extends Authenticatable
{

    use HasFactory, Notifiable, HasApiTokens;
    protected $fillable = [
        'username','email','address','phone_number','password'
    ];
    protected $hidden = [
        'password'
    ];
}
