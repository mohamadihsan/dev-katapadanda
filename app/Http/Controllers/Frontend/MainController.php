<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Frontend_Models\Menus;
use App\Frontend_Models\Setting_Languages;

class MainController extends Controller
{
    public function index(Request $request)
    {
    	// Bahasa yang digunakan
    	$where  = ['active_boo' => TRUE];
        $languages = Setting_Languages::select('language_name_var')->limit(1)->where($where)->get();
        foreach ($languages as $lang) {
        	$language = $lang['language_name_var'];
        }

    	// List Menu TopBar
    	$where  = ['active_boo' => TRUE, 'language_var' => $language];
        $list_menus = Menus::where($where)->get();
        
        return view('frontend_modules.index_frontend', compact(
        	'list_menus'
        ));
    }
}
