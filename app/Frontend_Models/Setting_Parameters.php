<?php

namespace App\Frontend_Models;

use Illuminate\Database\Eloquent\Model;

class Setting_Parameters extends Model
{
    protected $table = 'setting_parameters';
    protected $fillable = ['setting_parameter_code_var', 'setting_parameter_value_var'];
}
