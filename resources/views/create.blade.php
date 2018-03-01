<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>

<form action="form" method="POST">

<input type="text" name="titulo">Título
<textarea name="contenido" id="contenido" cols="30" rows="10"></textarea>
<select name="Categories">
@foreach ($categories as $item)
    <option value="{{$item->id}}">{{$item->title}}</option>
@endforeach
</select>
<input type="submit" value="Crear Post">Crear Post

{{ csrf_field() }}
</form>


    
</body>
</html>