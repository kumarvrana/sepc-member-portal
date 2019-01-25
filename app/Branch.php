<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'user_id', 'code', 'name'
    ];
    
}
