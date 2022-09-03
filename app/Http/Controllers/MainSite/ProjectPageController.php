<?php

namespace App\Http\Controllers\MainSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectPageController extends Controller
{
    public function projectPage() {
        $pageTitle = " - Project";
        $page_class = "project_page";
        return view('project',compact('pageTitle', 'page_class'));
    }
}
