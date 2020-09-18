@extends('base')
@section('main')

    <h5>Pós-Graduação em Desenvolvimento de Sistemas Web e Mobile Programação Web em PHP</h5> <hr>
    <p>
    Prof. Dr. Rodolfo Miranda Pereira <br>

    Aluno: Ericsson Beck F. Souza <hr>
    </p>
    
    <p>Atividade Avaliativa Utilizando o Framework Laravel</p>
    <p>
    O trabalho foi construindo com base um sistema de controle de gastos onde o 
    usuário pode inserir as despesas em categorias personalizadas.
    </p>
    <p>
    Segue abaixo um breve resumo das atividades que compõe esse trabalho. 
    Caso queira conhecer o aplicativo de forma imediata recomenda-se fazer o cadastro 
    <a href="{{route('gastos.index')}}">aqui para se ter acesso diretamento ao controle financeiro.</a>
    </p>
    <p>
    Todos os códigos fontes estão no repositório <a href="https://github.com/coder-studio/ifpr-laravel">https://github.com/coder-studio/ifpr-laravel</a>
    </p>
    <p>
    Esse trabalho conta com um banco de dados em MySql que armazena as informações de gastos e de categorias.
    Também conta com uma rotina de autenticação nativa do framework Laravel chamada "auth". Nessa rotina 
    o usuário pode cadastrar diversos usuários ao sistema e a sua páginas são protegidas através do "guards"
    e "providers".
    </p>
    <p>
        <a href="{{ route('register') }}">
        As funcionalidades principais do sistema que acessam o banco de dados são protegidas por autenticação 
        e cada usuário deve ser previamente cadastrado para obter acesso.
        </a>    
    </p>
    <p>
    Além da rotina nativa de cadastro e autenticação, o sistema foi programado para atender as 
    rotinas de CRUD para as entidades "gastos" e "categorias". Dessa forma, o usuário pode criar, modificar ou excluir 
    gastos e categorias preservando o relacionamento entre eles, ou seja, cada gasto pode ser relacionado a "n"
    categorias.
    </p>
    <p>
    Para atender as exigencias de validação o sistema faz uso do método nativo <strong>validate</strong> dos controllers.    
    </p>
    <p>
    Por exemplo: <br>
    <code>
    $request->validate([
            'local'=>'required',
            'categoria'=>'required',
            'valor'=>'required'
        ]);
    </code>
    </p>
    <p>
    Durante o desenvolvimento dessa atividade pode-se observar bastante espaço para a evolução dessa solução
    onde poderia ser adicionado dashboards com gráficos de saldos e despesas mensais, controles mais apurados
    de contas, investimentos, etc
    </p>
    <p>
    Sem dúvida o trabalho possibilitou diversas oportunidades de estudo, permitindo observar a praticidade
    e agilidade do framework no desenvolvimento de sistemas em php.
    </p>
@endsection