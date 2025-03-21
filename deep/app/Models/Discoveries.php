<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;


class Discoveries extends Model
{
    use HasFactory;
    protected $table = 'discoveries';    
    
    protected $primaryKey = 'id';
    public $incrementing = true;
    
    protected $fillable = [        
        'title',
        'description',
        'date',
        'area_of_study',
        'scientists_inventors',
        'references',
        'keywords',
        'image_url',
    ];
    
    public $timestamps = false; // Adjust as needed
}