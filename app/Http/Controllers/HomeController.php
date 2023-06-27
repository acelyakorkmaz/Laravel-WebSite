<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function page1(){
    $data["yazi1"]="This is my first web site by using Php Laravel";
    $data["yazi2"]="These texts coming from Controller side";
    $data["yazi3"]="Our Services";
    $data["yazi4"]="Contact Us";
    $data["yazi5"]="Next";
    $data["yazi6"]="These texts coming from Controller side";
        return view('web',$data);
   }

}
