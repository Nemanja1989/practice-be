<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public static function getAllTeams(){
        return self::paginate(5);
    }
}
