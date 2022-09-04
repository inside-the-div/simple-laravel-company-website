<?php

namespace App\Http\Controllers\MainSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
class HomePageController extends Controller
{
    public function homePage() {

        $sliders = Slider::all();
        // dd($sliders);
        $pageTitle = "";
        $page_class = "";

        return view('index',compact('pageTitle', 'page_class', 'sliders'));
    }
}
