<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
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
        $series = Serie::all();
        $mensagemAdicionar = session('mensagem.sucesso');
        $mensagemExcluir = session('mensagem.excluir');
        return view('series.index')-> with('series', $series)-> with('mensagemAdicionar', $mensagemAdicionar)-> with('mensagemExcluir', $mensagemExcluir);

    }
    public function store(SeriesFormRequest $request)
    {
        $serie = Serie::create($request->all());
        return to_route('series.index')->with('mensagem.sucesso', "Série '{$serie->nome}' adicionada com sucesso");
    }
    public function create()
    {
        return view('series.create');
    }
    public function destroy(Serie $series)
    {
        $series -> delete();
        return to_route('series.index')->with('mensagem.excluir',"Série '{$series->nome}'excluída com sucesso");
    }
    public function edit(Serie $series)
    {
        dd($series->temporadas);
        return view('series.edit')->with('serie',$series);
    }
    public function update(Serie $series, SeriesFormRequest $request)
    {
        $series->fill($request->all());
        $series->save();
        return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->nome}' atualizada com sucesso");
    }
}
