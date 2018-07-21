<?php

namespace App\Frontend_Models;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    protected $table = 'banners';
    protected $fillable = ['banner_img_var', 'created_by_var'];
}
