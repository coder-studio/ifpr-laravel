@extends('base') 
@section('main')
<div>
    <h1 class="display-5">Atualizar categoria</h1>    
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