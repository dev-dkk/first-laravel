<x-layout title="Series">
    <a href={{route('series.create')}} class="btn btn-dark mb-2">Adicionar</a>
    @isset($mensagemAdicionar)
    <div class="alert alert-success">
        {{$mensagemAdicionar}}
    </div>        
    @endisset
    @isset($mensagemExcluir)
    <div class="alert alert-danger">
        {{$mensagemExcluir}}
    </div>        
    @endisset

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">{{$serie->nome}}
                <form action="{{route('series.destroy', $serie->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">
                    Excluir
                </button>
                </form>
            </li>
        @endforeach
    </ul>
</x-layout>
