<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'users';
    
    protected $primaryKey = 'id';
    public $incrementing = true;    
    
    protected $fillable = [        
        'name',        
        'email',        
        'password',        
    ];
    
    public $timestamps = false; // Adjust as needed
}