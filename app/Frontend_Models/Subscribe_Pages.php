<?php

namespace App\Frontend_Models;

use Illuminate\Database\Eloquent\Model;

class Subscribe_Pages extends Model
{
    protected $table = 'subscribe_pages';
    protected $fillable = ['title_var', 'language_var', 'active_boo'];
}
