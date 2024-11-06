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
        $mensagemAdicionar = session('mensagem.sucesso');
        $mensagemExcluir = session('mensagem.excluir');
        return view('series.index')-> with('series', $series)-> with('mensagemAdicionar', $mensagemAdicionar)-> with('mensagemExcluir', $mensagemExcluir);

    }
    public function store(Request $request)
    {
        $serie = Serie::create($request->all());
        $request->session()->flash('mensagem.sucesso', "Série '{$serie->nome}' adicionada com sucesso");
        return to_route('series.index');
    }
    public function create()
    {
        return view('series.create');
    }
    public function destroy(Serie $series, Request $request)
    {
        $series -> delete();
        $request->session()->flash('mensagem.excluir',"Série '{$series->nome}'excluída com sucesso");
        return to_route('series.index');
    }
}
