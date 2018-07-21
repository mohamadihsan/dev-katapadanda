<?php

namespace App\Frontend_Models;

use Illuminate\Database\Eloquent\Model;

class Service_Page_Details extends Model
{
    protected $table = 'service_page_details';
    protected $fillable = ['service_name_var', 'language_var', 'active_boo'];
}
