<?php

namespace TTSoft\Base\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
class PublicController extends Controller
{

    public function lang($lang){
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
