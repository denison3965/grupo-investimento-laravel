<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login | Investindo</title>
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
  </head>
  <body>

    <div class="background">s</div>

    <section id="conteudo-view" class="login">

      <h1> <strong> Investimento </strong></h1>
      <h3>O nosso gerenciador de insvestimento</h3>

      {!! Form::open(['route' => 'user.login', 'method' => 'POST']) !!}
        @csrf
        <p> <strong> Acesse o sistema </strong> </p>

        <label>
          {!! Form::text('username', null, ['class' => 'input', 'placeholder' => 'Usuario']) !!}
        </label>

        <label>
          {!! Form::password('password', ['placeholder'=> 'Senha' ]) !!}
        </label>


        {!! Form::submit('Entrar') !!}
      {!! Form::close() !!}




    </section>
  </body>
</html>
