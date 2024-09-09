<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<h1>{{$title}}</h1>


@if($stampa)
<h2>Elenco città</h2>
<ul>
    @foreach ($city as $citta)
    <li>{{$citta}}</li>

    @endforeach
</ul>
@else
  <h2>Città non trovata</h2>
  @endif
<body>
    
</body>
</html>
