<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Serie;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $series = Serie::query()->orderBy('nome') -> get();
        return view('series.index')-> with('series', $series);

    }
    public function store(Request $request)
    {
        Serie::create($request->all());
        return redirect('/series');
    }
    public function create()
    {
        return view('series.create');
    }
}
