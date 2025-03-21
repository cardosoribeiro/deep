<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;


class Comments extends Model
{
    use HasFactory;
    protected $table = 'comments';
    
    protected $primaryKey = 'id';
    public $incrementing = true;
                
    protected $fillable = [        
        'user_id',        
        'commentable',        
        'text',        
    ];    
    
    public function user()
    {
        return $this->belongsTo(
            User::class,
            'user_id',
            'id'
        );
    }    

    public $timestamps = false; // Adjust as needed
}