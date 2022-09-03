<?php

namespace App\Http\Controllers\MainSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function aboutPage() {
        $pageTitle = " - About";
        $page_class = "about_page";
        return view('about',compact('pageTitle', 'page_class'));
    }
}
