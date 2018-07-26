<?php

namespace App\Frontend_Models;

use Illuminate\Database\Eloquent\Model;

class Logo_Clients extends Model
{
    protected $table = 'logo_clients';
    protected $fillable = ['client_name_var', 'logo_img_var', 'created_by_var'];
}
