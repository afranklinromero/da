<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $title }}</h1>
<hr>

{{--  @unless (empty($users) )
   <ul>
   @foreach($users as $user)
        <li> {{ $user }}</li>
    @endforeach
</ul>
@else
<p> no hay usuarios </p>
@endif --}}

{{-- @empty ($users)
    <p> no hay usuarios </p>
@else 
<ul>
        @foreach($users as $user)
        <li> {{ $user }}</li>
    @endforeach
</ul>
@endempty --}}
<ul>
    @forelse ($users as $user)
        <li> {{ $user }}</li>
        @empty
        <li> no hay usuarios </li>

        @endforelse
</ul>
<?php 
$semanaSiguiente = time() + (7 * 24 * 60 * 60);
                   // 7 días; 24 horas; 60 minutos; 60 segundos
echo 'Ahora:            '. date('Y-m-d') ."\n";

?>
<br>
{{ time() }}
</body>
</html>