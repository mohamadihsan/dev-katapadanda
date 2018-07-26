<?php

namespace App\Frontend_Models;

use Illuminate\Database\Eloquent\Model;

class Contact_Page_Details extends Model
{
    protected $table = 'contact_details';
    protected $fillable = ['contact_name_var', 'language_var', 'active_boo'];
}
