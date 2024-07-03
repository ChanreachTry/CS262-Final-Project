<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index()
    {
        return view('certificate.main_certificate');
    }

    public function download()
    {
        return view('certificate.download_certificate');
    }


}
