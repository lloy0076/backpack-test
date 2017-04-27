<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf as Dompdf;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function test()
    {
        $view = 'Hi There';
        
        $dompdf = new Dompdf();
        $dompdf->loadHtml($view);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->set_option('isHtml5ParserEnabled', true);

        $dompdf->stream();
    }
}
