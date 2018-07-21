<?php

namespace App\Frontend_Models;

use Illuminate\Database\Eloquent\Model;

class Logos extends Model
{
    protected $table = 'logos';
    protected $fillable = ['logo_img_var', 'created_by_var'];
}
