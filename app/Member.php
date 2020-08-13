<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'line_id',
        'git_id',
        'place_of_birth',
        'date_of_birth',
        'id_card',
        'team_id',
        'cv',
    ];

    public function user(){
        return $this->belongsto(User::class);
    }
}