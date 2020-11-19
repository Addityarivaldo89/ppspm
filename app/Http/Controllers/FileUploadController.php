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
    public function fileUpload()

    {
        return view('fileUpload');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fileUploadPost(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip',
            'tipe' => 'required',
        ]);

        $fileName = $request->file->getClientOriginalName();
        $tipe = $request->tipe;
        $request->file->move(public_path('file'), $fileName);

        /* Store $fileName name in DATABASE from HERE */

        File::create([
            'name' => $fileName,
            'tipe' => $tipe
        ]);

        return back()
            ->with('success', 'You have successfully file upload.')
            ->with('file', $fileName);
    }

}
