<?php

namespace App\Http\Controllers\MainSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    public function contactPage() {
        $pageTitle = " - Contact";
        $page_class = "contact_page";
        return view('contact',compact('pageTitle', 'page_class'));
    }
}
