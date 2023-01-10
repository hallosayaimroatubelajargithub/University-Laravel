<?php
 
namespace App\Http\Controllers;
 
use App\Models\Pages;
 
class PagesController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function tampilan()
    {
        return view('tampilan');
    }

    public function login()
    {
        return view('login');
    }

    public function level()
    {
        return view('level');
    }

}