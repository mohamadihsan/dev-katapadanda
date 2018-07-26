<?php

namespace App\Frontend_Models;

use Illuminate\Database\Eloquent\Model;

class Contact_Pages extends Model
{
    protected $table = 'contacts';
    protected $fillable = ['title_var', 'language_var', 'active_boo'];
}
