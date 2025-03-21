<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;


class IdeaDiscovery extends Model
{
    use HasFactory;
    protected $table = 'idea_discovery';    
    
    protected $primaryKey = 'id';
    public $incrementing = true;            
    
    protected $fillable = [        
        'idea_id',    
        'discovery_id',        
    ];
        
    public function ideas()
    {
        return $this->belongsTo(
            Ideas::class,
            'idea_id',
            'id'
        );
    }
    
    public function discoveries()
    {
        return $this->belongsTo(
            Discoveries::class,
            'discovery_id',
            'id'
        );
    }
    
    public $timestamps = false; // Adjust as needed
}