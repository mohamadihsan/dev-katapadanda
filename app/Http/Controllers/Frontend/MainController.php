<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Frontend_Models\Banners;
use App\Frontend_Models\Logos;
use App\Frontend_Models\Menus;
use App\Frontend_Models\Service_Pages;
use App\Frontend_Models\Service_Page_Details;
use App\Frontend_Models\Setting_Languages;
use App\Frontend_Models\Testimony_Pages;

class MainController extends Controller
{
    public function index(Request $request)
    {
		// init
		$language = '';
		
    	// Bahasa yang digunakan
    	$where  = ['active_boo' => TRUE];
        $languages = Setting_Languages::select('language_name_var')->limit(1)->where($where)->get();
        foreach ($languages as $lang) {
        	$language = $lang['language_name_var'];
        }

        // Banner
    	$where  = ['active_boo' => TRUE];
        $banners = Banners::where($where)->limit(1)->get();

        // Logo
    	$where  = ['active_boo' => TRUE];
        $logos = Logos::select('logo_img_var')->where($where)->limit(1)->get();

    	// List Menu TopBar
    	$where  = ['active_boo' => TRUE, 'language_var' => $language];
        $list_menus = Menus::where($where)->get();

    	// Content Menu Service / Layanan
    	$where  = ['active_boo' => TRUE, 'language_var' => $language];
        $service_pages = Service_Pages::where($where)->get();

        // Detail Menu Service / Layanan
    	$where  = ['active_boo' => TRUE, 'language_var' => $language];
		$service_page_details = Service_Page_Details::where($where)->get();
		
		// Testimoni
		$where  = ['active_boo' => TRUE];
        $testimonies = Testimony_Pages::where($where)->get();
        
        return view('frontend_modules.index_frontend', compact(
        	'banners',
        	'banner_details',
        	'list_menus',
        	'logos',
        	'service_pages',
			'service_page_details',
			'testimonies'
        ));
    }
}
