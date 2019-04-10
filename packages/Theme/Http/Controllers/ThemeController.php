<?php

namespace TTSoft\Theme\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use TTSoft\Theme\Repositories\ThemeRepositoryInterface;
use TTSoft\Theme\Entities\Theme;
class ThemeController extends Controller
{
	public function index(){
		$themes = Theme::latest('active')->get();
		return view('theme::themes.list',compact('themes'));
	}


	public function activeTheme($id){
		$themes = Theme::where('active',1)->update(['active' => 0]);
		$themes = Theme::find($id);
		$themes->active = 1;
		$themes->save();
		return redirect()->back();
	}
}