<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>IFPR - Controle de gastos</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</head>
<body>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">    
      <div class="modal-body">
        <div class="alert alert-warning alert-dismissible shadow" role="alert" id="alertBox">       
          <p class="mb-0" id="titulo">Título</p>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <hr>
            <p id="msg">This is a warning alert—check it out!</p>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="alertButton">Fechar</button>
        </div>
      </div>    
  </div>
</div>


@if(session()->get('success'))
  <script>
    $(document).ready(function showModal(){  
    $('#titulo').text('Mensagem');
    $('#alertBox').removeClass().addClass('alert alert-success alert-dismissible shadow');
    $('#alertButton').removeClass().addClass('btn btn-success');
    $('#msg').text('{{session()->get('success')}}');
    $('#modal').modal('show');});
  </script>      
@endif

<?php
if ($errors->any())
{  
  $msg = ''; 
  foreach ($errors->all() as $error)
  {
    $msg .= $error;
  }  
?>              
  <script>
    $(document).ready(function showModal(){  
    $('#titulo').text('Mensagem');
    $('#alertBox').removeClass().addClass('alert alert-danger alert-dismissible shadow');
    $('#alertButton').removeClass().addClass('btn btn-danger');
    $('#msg').text('{{ $msg }}');    
    $('#modal').modal('show');});
  </script>   
<?php
}
?>

<div class="container-md">
  <div class='row m-4'>
    <div class='col'>        
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-px">
        <a class="navbar-brand" href="{{ url('/') }}">IFPR</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>    

        <div class="collapse navbar-collapse" id="navbarSupportedContent">        
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">
                <i class="fa fa-home"></i>
                Início</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('gastos.lista') }}">
                <i class="fa fa-dollar"></i>
                Gastos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categorias.index') }}">
                <i class="fa fa-list"></i>
                Categorias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('apresentacao') }}">
                <i class="fa fa-file"></i>
                Apresentação</a>
            </li>
          </ul>
          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">
                <i class="fa fa-lock"></i>
                {{ __('Entrar') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">
                    <i class="fa fa-address-card"></i>
                    {{ __('Cadastrar') }}</a>
                </li>
            @endif
            @else
              <li class="nav-item">                                
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                  <i class="fa fa-sign-out"></i> {{ __('Sair') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>                                
              </li>
            @endguest
          </ul>     
        </div>
      </nav>
    </div>
  </div> 
  
  
  <div class='row mt-5'>
    <div class='col'>
      <div class="jumbotron jumbotron-fluid m-0">
        <div class="container">
          <h1 class='display-4'>Trabalho IFPR</h1>
          <p class="lead">
            Aluno: Ericsson Beck F. Souza          
          </p>         

          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Propriedades demonstradas no sistema
                  </button>
                </h5>
              </div>
              <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">          
                  <i class="fa fa-check-square fa-2x"></i> Contenha CRUD (Criação/Leitura/Atualização/Deleção) de entidades <br>
                  <i class="fa fa-check-square fa-2x"></i> Envolva pelo menos duas entidades (sem contar com o usuário). <br>
                  <i class="fa fa-check-square fa-2x"></i> As entidades tenham pelo menos um tipo de relacionamento entre si. <br>
                  <i class="fa fa-check-square fa-2x"></i> Contenha um módulo de autenticação de usuários que proteja apenas o acesso às funcionalidades de criação, atualização e deleção. <br>
                  <i class="fa fa-check-square fa-2x"></i> Algum tipo de validação de dados nos formulários.          
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>   
      <div class='col p-4 border'>              
        @yield('main')             
      </div>  
    </div>    
  </div> 


    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</div>
</body>
</html>