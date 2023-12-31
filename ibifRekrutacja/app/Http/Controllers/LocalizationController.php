<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function setLocale(Request $request, $locale)
    {
        $request->session()->put('locale', $locale);
        
        return redirect()->back();
    }
    
}
