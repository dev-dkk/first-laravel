<form action={{$action}} method="post" >
    @csrf

    @if($update)
        @method('PUT')
    @endif
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input id="nome" name="nome" type="text" class="form-control" placeholder="Insira uma nova serie" 
        @isset($nome)value="{{$nome}}"@endisset>
    </div>
    <button class="btn btn-primary" type="submit">Salvar</button>
</form>