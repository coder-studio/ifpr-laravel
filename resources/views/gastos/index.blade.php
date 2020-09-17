@extends('base')
@section('main')

<div> 
  <div class="col-sm-12">
      <h5>Controle Financeiro</h5><hr>
    
  <form class='form-inline' method="post" action="{{ route('gastos.store') }}">
      @csrf          
      <div class="form-group">    
          <label for="local">Local:</label>
          <input type="text" class="form-control m-4" name="local"/>
      </div>
      <div class="form-group">
          <label for="categoria">Categoria:</label>
          <input type="text" class="form-control m-4" name="categoria"/>
      </div>
      <div class="form-group">
          <label for="valor">Valor:</label>
          <input type="text" class="form-control m-4" name="valor"/>
      </div>                                  
      <button type="submit" class="btn btn-primary">Adicionar</button>
  </form>

  <table class="table table-striped">
    <thead class="thead-light">
        <tr>
          <th>ID</th>
          <th>Data</th>
          <th>Local</th>
          <th>Categoria</th>
          <th>Valor</th>
          <th colspan = 2></th>
        </tr>
    </thead>
    <tbody>
        @foreach($gastos as $gasto)
        <tr>
            <td>{{$gasto->id}}</td>
            <td>{{$gasto->created_at}}</td>
            <td>{{$gasto->local}}</td>
            <td>{{$gasto->categoria}}</td>
            <td>{{$gasto->valor}}</td>            
            <td class='text-right'>
                <a href="{{ route('gastos.edit',$gasto->id)}}" class="btn btn-primary">Editar</a>
            </td>
            <td class='text-left'>
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