@extends('base') 
@section('main')
<div>
    <<h5>Categoria - Editar</h5><hr>  
    <form method="post" action="{{ route('categorias.update', $categoria->id) }}">
        @method('PATCH') 
        @csrf
        <div class="form-group">
            <label for="nome">Categoria:</label>
            <input type="text" class="form-control" name="nome" value={{ $categoria->nome }} />
        </div>      
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>
@endsection