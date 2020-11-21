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

    public function update(Request $request)
    {
        for ($i = 0; $i < count($request->verif); $i++){
            // $data[] = [
            //     'checked' => $request->verif[$i],
            // ];
            File::where('userid',$request->iduser)->where('id',$request->idfile[$i])->update(['checked' => $request->verif[$i]]);
        }

        return back()
            ->with('success', 'You have successfully file upload.');
    }
}
