<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TESTE</title>
  </head>
  <body>
    <!-- <?php for ($i=0; $i < 5; $i++) { ?>
          <h2>Hello</h2>
    <?php } ?> -->

    <!-- <?php
      $nome = "Blade";
     ?> -->

    @php
      $nome = "Blade";
    @endphp

    @for ($i=0; $i < 5; $i++)
      <h1>Hello {{$nome}}</h1>
    @endfor
  </body>
</html>
