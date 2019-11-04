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
        return view('home');
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
    public function organizationChart()
    {
        return view('organization_chart');
    }

    /*
     * @return \Illuminate\View\View
     */
    public function accommodationDivision()
    {
        return view('accommodation_division');
    }

    /*
     * @return \Illuminate\View\View
     */
    public function estateDivision()
    {
        return view('estate_division');
    }

    /*
     * @return \Illuminate\View\View
     */
    public function privacyPolicy()
    {
        return view('privacy_policy');
    }
}