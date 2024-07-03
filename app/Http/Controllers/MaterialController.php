<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        return view('material.main_material');
    }

    public function select()
    {
        return view('material.select_material');
    }

    public function form()
    {
        return view('material.form_material');
    }

    public function result()
    {
        return view('material.result_material');
    }

}
