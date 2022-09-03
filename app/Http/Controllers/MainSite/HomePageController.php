<?php

namespace App\Http\Controllers\MainSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function homePage() {
        $pageTitle = "";
        $page_class = "";
        return view('index',compact('pageTitle', 'page_class'));
    }
}
