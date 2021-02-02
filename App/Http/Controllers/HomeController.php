<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
/*    public function __construct()
    {
        $this->middleware('auth');
    }
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home($idm)
    {
        //Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'es']); }
        if($idm!=session('lang'))
        {
            if(session('lang')=="es")
            {
                return redirect('/es/home');
            } else if(session('lang')=="en"){
                return redirect('/en/home');
            } else if(session('lang')=="va"){
                return redirect('/va/home');
            } else {
                return redirect('/es/home');
            }
        } 
        return view('paginas.home');
    }

    public function home2()
    {
        //Comprobamos si la url corresponde al lenguaje
        if(!session('lang')) { session(['lang' => 'es']); }
        if(session('lang')=="es")
        {
            return redirect('/es/home');
        } else if(session('lang')=="en"){
            return redirect('/en/home');
        } else if(session('lang')=="va"){
            return redirect('/va/home');
        } else {
            return redirect('/es/home');
        }
    }

}
