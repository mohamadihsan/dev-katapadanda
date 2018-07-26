<?php

namespace App\Frontend_Models;

use Illuminate\Database\Eloquent\Model;

class Team_Pages extends Model
{
    protected $table = 'our_teams';
    protected $fillable = ['position_name_var', 'active_boo', 'created_by_var'];
}
