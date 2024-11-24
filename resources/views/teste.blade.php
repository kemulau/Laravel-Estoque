<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
</head>
<body>
 @php 
 $clientes = array("João","Pedro","Lucas");
 @endphp
 
 @if (count($clientes) == 0)
 <p>Não existe clientes cadastrados</p>
 @elseif (count($clientes) == 1)
 <p>Há 1 cliente cadastrado</p>
 @else 
<p>Form encontrados{{ count($clientes) }} Clientes cadastrados</p>
@endif

@for ($i=0;$i< 5;$i++)
 {{$i }}
  <img src="/img/logo.png" width="100px" height="100px">
@endfor
<div>
    {{$produto}}
    {{$valor}}
</div>
</body>
</html>