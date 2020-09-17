@extends('base')
@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Novo gasto') }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md">                 
                            <form method="post" action="{{ route('gastos.store') }}">
                                @csrf          
                                <div class="form-group">    
                                    <label for="local">Local:</label>
                                    <input type="text" class="form-control" name="local"/>
                                </div>
                                <div class="form-group">
                                    <label for="categoria">Categoria:</label>
                                    <input type="text" class="form-control" name="categoria"/>
                                </div>
                                <div class="form-group">
                                    <label for="valor">Valor:</label>
                                    <input type="text" class="form-control" name="valor"/>
                                </div>                                  
                                <button type="submit" class="btn btn-primary">Adicionar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>      

@endsection