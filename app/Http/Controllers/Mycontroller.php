<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller
{
    private $age ;

    public function __construct() {
        $this->age = 10;
    }

    public function getData(Request $request, $name) 
    {
        $a = 'xin chao';
        echo "Xin chao! " .$name;
        echo "<br>Tuoi: ".$this->age;
        echo "<br>" .$request->path();
        echo "<br>" .$request->url();
        // dd($request);
        var_dump($request);
        
        // if(!$request->is('admin/*')) {
        //     return redirect('/');
        // } else {
        //     echo 2;
        // }

        if($request->isMethod('post')) {
            echo 1;
        } else {
            echo 2;
        }
    }
}
