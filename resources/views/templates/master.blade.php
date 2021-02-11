<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    @yield('css-view')
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Spectral:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  </head>
  <body>
    @include('templates.menu-lateral')

    <section id="conteudo-view-formulario">
      @yield('conteudo-view')
    </section>

    @yield('js-view')


  </body>
</html>
