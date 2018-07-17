<?php

namespace App\Frontend_Models;

use Illuminate\Database\Eloquent\Model;

class Setting_Languages extends Model
{
    protected $table = 'setting_languages';
    protected $fillable = ['language_name_var', 'language_desc_var'];
}
