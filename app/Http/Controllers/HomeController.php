<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
    * @return \Illuminate\View\View
    */
    public function index()
    {
        return view('welcome');
    }

    /*
    * @return \Illuminate\View\View
    */
    public function company()
    {
        return view('company');
    }

    /*
     * @return \Illuminate\View\View
     */
    public function greeting()
    {
        return view('greeting');
    }

    /*
     * @return \Illuminate\View\View
     */
    public function organization_chart()
    {
        return view('organization_chart');
    }

    /*
     * @return \Illuminate\View\View
     */
    public function accommodation_division()
    {
        return view('accommodation_division');
    }

    /*
     * @return \Illuminate\View\View
     */
    public function estate_division()
    {
        return view('estate_division');
    }

    /*
     * @return \Illuminate\View\View
     */
    public function privacy_policy()
    {
        return view('privacy_policy');
    }
}