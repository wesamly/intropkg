<?php

namespace Lsdev\Intropkg;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Emoji\Emoji;

class IntroController extends Controller
{
    public function sayHello($name){
        //ToDo: sanitize name!
        $icon = Emoji::grinningFace();
        //$icon = '';
    	return view('intropkg::message', ['name' => $name, 'icon' => $icon]);
    }
}
