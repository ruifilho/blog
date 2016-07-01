<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function index(){
        
        $array = array(   
            array("Uesney", "Meu primeiro post, tô muito feliz!"),
            array("Valdisney", "Olha só gente, olá mundo!")    
        );  
        
        return view('post.index', compact('array'));
    }
}
