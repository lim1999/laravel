<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function changeLanguage(Request $request){
        if ($request->set_lang) session(['set_lang' => $request->set_lang]);
        return redirect()->back();
    }
}
