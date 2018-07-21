<?php

namespace App\Frontend_Models;

use Illuminate\Database\Eloquent\Model;

class Service_Pages extends Model
{
    protected $table = 'service_pages';
    protected $fillable = ['title_var', 'language_var', 'active_boo'];
}
