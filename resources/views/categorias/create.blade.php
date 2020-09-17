@extends('base')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Nova categoria') }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md"> 
                            <form method="post" action="{{ route('categorias.store') }}">
                                @csrf          
                                <div class="form-group">    
                                    <label for="nome">Categoria:</label>
                                    <input type="text" class="form-control" name="nome"/>
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