<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $series = [
            'The 100',
            'The Walking Dead',
            'Breaking Bead'
        ];
        return view('series.index')-> with('series', $series);

    }
}
