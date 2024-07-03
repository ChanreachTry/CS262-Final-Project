<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class memberController extends Controller
{
    public function get_member (Request $request){
        $dataArray[] = [
            'memberid'=> $request -> id,
            'membername'=> $request -> name,
            'birthdate'=> $request -> birthdate
        ];

        return view('get-member',
            [
                'dataArray' => $dataArray
            ]
            );
    }
}
