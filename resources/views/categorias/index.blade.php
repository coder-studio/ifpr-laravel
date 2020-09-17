@extends('base')
@section('main')
<div> 
  <h5>Categorias</h5><hr>     
  <div>
    <a href="{{ route('categorias.create')}}" class="btn btn-primary">Nova</a></br></br>
  </div>
  <table class="table table-striped">
    <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th colspan = 2>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categorias as $categoria)
        <tr>
            <td>{{$categoria->id}}</td>
            <td>{{$categoria->nome}}</td>       
            <td>
                <a href="{{ route('categorias.edit',$categoria->id)}}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('categorias.destroy', $categoria->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection