<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * В конструкторе проверяем, кем является пользователь
     * зарегистрированный пользователь или гость
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
