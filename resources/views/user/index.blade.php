@extends('templates.master')

@section('css-view')
@endsection

@section('js-view')
@endsection


@section('conteudo-view')

  <div class="title_main">
    <h1>Cadastro de usuários</h1>
  </div>

  <div class="marca_dagua">
    <img src="{{URL::asset('/assets/images/logo.png')}}" alt="Logo Invester">
  </div>

  {!! Form::open(['method' => 'post', 'class' => 'form-padrao' ]) !!}

    @include('templates.formulario.input', ['label' => 'CPF', 'input' => 'cpf', 'attributes' => ['placeholder' => 'Ex. 0000-0000']])
    @include('templates.formulario.input', ['label' => 'Nome', 'input' => 'nome', 'attributes' => ['placeholder' => 'Ex. David']])
    @include('templates.formulario.input', ['label' => 'Telefone', 'input' => 'telefone', 'attributes' => ['placeholder' => 'Ex. 98888-8888']])
    @include('templates.formulario.input', ['label' => 'Email', 'input' => 'email', 'attributes' => ['placeholder' => 'Ex. exemplo@hotmail.com']])
    @include('templates.formulario.password', ['label' => 'Senha', 'input' => 'senha', 'attributes' => ['placeholder' => 'Senha']])
    @include('templates.formulario.submit',['input' => 'cadastrar', 'class' => 'btn_send'])


  {!! Form::close() !!}

@endsection
