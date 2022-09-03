<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function addSlider() {
        return view('admin.slider.add');
    }

    public function storeSlider(Request $slider) {
        // 
        $heading1 = $slider->heading1;
        $heading2 = $slider->heading2;
        $text = $slider->text;
        $button1_label = $slider->btn1_label;
        $button1_link = $slider->btn1_link;
        $button2_label = $slider->btn2_label;
        $button2_link = $slider->btn2_link;

        $slider_content = new Slider;

        $slider_content->heading1 = $heading1;
        $slider_content->heading2 = $heading2;
        $slider_content->text = $text;
        $slider_content->button_1_label = $button1_label;
        $slider_content->button_1_link = $button1_link;
        $slider_content->button_2_label = $button2_label;
        $slider_content->button_2_link = $button2_link;

        $slider_content->save();
        
        return back()->with('message', 'Save successfull.');
    }
}
