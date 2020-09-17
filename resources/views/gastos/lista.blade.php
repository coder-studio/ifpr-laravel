@extends('base')
@section('main')

<div> 

<h5>Gastos</h5><hr>
  <div>
    <a href="{{ route('gastos.create')}}" class="btn btn-primary">Novo</a></br></br>
  </div>
  <table class="table table-striped">
    <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Local</th>
          <th>Categoria</th>
          <th>Valor</th>
          <th colspan = 2>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($gastos as $gasto)
        <tr>
            <td>{{$gasto->id}}</td>
            <td>{{$gasto->local}}</td>
            <td>{{$gasto->categoria}}</td>
            <td>{{$gasto->valor}}</td>            
            <td>
                <a href="{{ route('gastos.edit',$gasto->id)}}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('gastos.destroy', $gasto->id)}}" method="post">
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