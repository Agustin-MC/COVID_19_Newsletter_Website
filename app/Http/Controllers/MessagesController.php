<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' =>'required'
        ]);

        return 'SUCCESS';
    }
}
