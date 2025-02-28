<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Controllers\Controller as Controller;

class PageController extends Controller {

    function __construct() {
        
    }

    public function aboutUs() {
        return view('page.about-us');
    }

    public function privacyPolicy() {
        return view('page.privacy-policy');
    }

    public function cookiePolicy() {
        return view('page.cookie-policy');
    }

}
