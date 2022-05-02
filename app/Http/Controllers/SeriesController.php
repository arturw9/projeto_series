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

        $html = "<ul>";
        foreach ($series as $serie) {
            $html .= "<li>$serie</li>";
        }
        $html .= "</ul>";

        return $html;
    }
}
