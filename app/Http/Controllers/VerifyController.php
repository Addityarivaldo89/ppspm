<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class VerifyController extends Controller
{
    public function index($userid)
    {
        $files = File::all();
        $result = File::whereUserid($userid)->first();
        return view('verify',['files' => $files,'userid'=>$result]);
    }
}
