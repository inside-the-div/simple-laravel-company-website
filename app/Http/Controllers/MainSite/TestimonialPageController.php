<?php

namespace App\Http\Controllers\MainSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialPageController extends Controller
{
    public function testimonialPage() {

        $pageTitle = " - Testimonial";
        $page_class = "testimonial_page";
        return view('testimonial',compact('pageTitle', 'page_class'));
    }
}
