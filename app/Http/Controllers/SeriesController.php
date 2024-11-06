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
        return to_route('series.index');
    }
    public function create()
    {
        return view('series.create');
    }
    public function destroy(Request $request)
    {
        Serie::destroy($request->series);
        return to_route('series.index');
    }
}
