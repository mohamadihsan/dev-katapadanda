<?php

namespace App\Frontend_Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table = 'portofolio';
    protected $fillable = ['project_title_var', 'language_var', 'active_boo'];
}
