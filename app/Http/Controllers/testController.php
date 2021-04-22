<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;

class testController extends BaseController
{

    public function store(Request $request)
    {
        $path = $request->file('upload_file')->store('upload');
        echo $path;


    }


    


    


}
