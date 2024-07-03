<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('online.main_online_test');
    }

    public function select()
    {
        return view('online.select_online_test');
    }

    public function form()
    {
        return view('online.form_online_test');
    }

    public function result()
    {
        return view('online.result_online_test');
    }
}
