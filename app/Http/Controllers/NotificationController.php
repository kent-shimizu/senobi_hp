<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /*
    * @return \Illuminate\View\View
    */
    public function news()
    {
        return view('news');
    }

    /*
    * @return \Illuminate\View\View
    */
    public function recruit()
    {
        return view('recruit');
    }

    /*
    * @return \Illuminate\View\View
    */
    public function contact()
    {
        return view('contact');
    }
}
