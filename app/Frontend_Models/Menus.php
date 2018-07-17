<?php

namespace App\Frontend_Models;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table = 'menus';
    protected $fillable = ['menu_name_var', 'language_var'];
}
