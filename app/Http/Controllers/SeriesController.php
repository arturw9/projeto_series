<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends  Controller
{
     public function index(Request $request) {

        $series = [
            'Gerey\'s Anatomy',
            'Fast and Furius',
            'Avengers'
        ];

        return view('series.index', compact( 'series'));
    }

    public function create()
    {
        return view ('series.create');
    }
}
