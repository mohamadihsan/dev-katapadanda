<?php

namespace App\Frontend_Models;

use Illuminate\Database\Eloquent\Model;

class Testimony_Pages extends Model
{
    protected $table = 'testimonies';
    protected $fillable = ['feedback_txt', 'fullname_var', 'start_level_int', 'active_boo'];
}
