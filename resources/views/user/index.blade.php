@extends('templates.master')

@section('css-view')
@endsection

@section('js-view')
@endsection


@section('conteudo-view')

  {!! Form::open(['method' => 'post', 'class' => 'form-padrao' ]) !!}

    @include('templates.formulario.input', ['label' => 'CPF', 'input' => 'cpf', 'attributes' => ['placeholder' => 'CPF']])
    @include('templates.formulario.input', ['label' => 'Nome', 'input' => 'nome', 'attributes' => ['placeholder' => 'Nome']])
    @include('templates.formulario.input', ['label' => 'Telefone', 'input' => 'telefone', 'attributes' => ['placeholder' => 'Telefone']])
    @include('templates.formulario.input', ['label' => 'Email', 'input' => 'email', 'attributes' => ['placeholder' => 'Email']])
    @include('templates.formulario.password', ['label' => 'Senha', 'input' => 'senha', 'attributes' => ['placeholder' => 'Senha']])
    @include('templates.formulario.submit',['input' => 'cadastrar'])


  {!! Form::close() !!}

@endsection
