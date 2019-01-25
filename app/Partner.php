<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Partner extends Model
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'user_id', 'desig_id', 'title', 'name', 'relation', 'relative', 'address', 'mobile'
    ];
}
