<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use DB;

class VerifyController extends Controller
{
    public function index($userid)
    {
        $files = File::all();
        $result = File::whereUserid($userid)->first();
        $status_v = DB::table('v_status')->select('id','name','checked')->get();
        return view('verify',['files' => $files,'userid'=>$result,'status_v'=>$status_v]);
    }

    public function cetak()
    {
        //$user = File::find($userid);
        return view('print');
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
