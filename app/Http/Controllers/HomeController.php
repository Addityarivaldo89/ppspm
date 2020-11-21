<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $files = File::all();
        $user_v = DB::table('v_user_2')->select('id','name')->groupBy('name')->get();
        $status_v = DB::table('v_status')->select('id','name','checked')->get();
        $status_user_verif = DB::table('v_user_verif')->select('id','name','checked')->get();
        //dd($status_v);
        return view('home',['files' => $files,'user_v' => $user_v, 'status_v' => $status_v,'user_verif' => $status_user_verif]);
    }
}
