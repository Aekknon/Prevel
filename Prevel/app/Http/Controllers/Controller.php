<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    if ($request->hasFile('input_img')) {
        if($request->file('input_img')->isValid()) {
            try {
                $file = $request->file('input_img');
                $name = rand(11111, 99999) . '.' . $file->getClientOriginalExtension();
                $request->file('input_img')->move("fotoupload", $name);
            } catch (Illuminate\Filesystem\FileNotFoundException $e) {
    
            }
        }
    }
}
