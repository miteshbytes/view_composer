<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index()
    {
        $movieList = [
            'Badla',
            'ABCD',
            'Race 2',
            'Triranga',
            'brothers',
        ];

        return view('welcome', compact('movieList'));
    }

    public function ticket()
    {
        $tickets = [
            'Upper',
            'Silver Cotch',
            'Balkani'
        ];
        return view('ticket', compact('tickets'));
    }
}
