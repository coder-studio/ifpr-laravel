@extends('base') 
@section('main')
<div>
    <h1 class="display-5">Atualizar</h1>
    
    <form method="post" action="{{ route('gastos.update', $gasto->id) }}">
        @method('PATCH') 
        @csrf
        <div class="form-group">
            <label for="local">Local:</label>
            <input type="text" class="form-control" name="local" value={{ $gasto->local }} />
        </div>
        <div class="form-group">
            <label for="categoria">Categoria:</label>
            <input type="text" class="form-control" name="categoria" value={{ $gasto->categoria }} />
        </div>
        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="text" class="form-control" name="valor" value={{ $gasto->valor }} />
        </div>            
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

</div>
@endsection