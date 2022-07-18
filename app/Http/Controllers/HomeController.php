<?php


namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:JcbHome|MpuHome', ['only' => ['JCBHome','MPUHome']]);
    }
    public function home()
    {
        return view('home');
    }
    public function JCBHome()
    {
        return view('JCBHome');
    }
    public function MPUHome()
    {
        return view('MPUHome');
    }

}