<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function demoAction(Request $request){
        $photoFile = $request->file('photo');
        $fileSize = filesize($photoFile);
        $fileType = filetype($photoFile);
        $fileOriginalName = $photoFile->getClientOriginalName();
        $fileTeamName = $photoFile->getFilename();
        $fileExtension = $photoFile->extension();
        return array(
            'file_size' => $fileSize,
            'file_type' => $fileType,
            'original_name' => $fileOriginalName,
            'temp_name' => $fileTeamName,
            'extension' => $fileExtension
        ) ;
    }
}
