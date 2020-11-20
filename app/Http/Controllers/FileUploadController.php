<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;

class FileUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function spmTiga()
    {
        return view('spmTiga');
    }

    public function spmUp()
    {
        return view('spmUp');
    }

    public function spmBendahara()
    {
        return view('spmBendahara');
    }

    public function spmGaji()
    {
        return view('spmGaji');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUploadPost(Request $request)
    {
        // $request->validate([
        //     'file[]' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip',
        //     'userid[]' => 'required',
        //     'tipe[]' => 'required',
        // ]);        

        for ($i = 0; $i < count($request->userid); $i++){
            $fileName[$i] = $request->file[$i]->getClientOriginalName();
            $data[] = [
                'name' =>  $fileName[$i],
                'userid' =>  $request->userid[$i],
                'tipe' => $request->tipe[$i]
            ];
        }
        //dd($data);
        File::insert($data);

        return back()
            ->with('success', 'You have successfully file upload.')
            ->with('file', $fileName);
    }

}
