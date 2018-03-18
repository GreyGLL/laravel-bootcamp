<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../js/custom-jquery.js"></script>
    <title>Formulario</title>
</head>
<body>

<form action="/post/{{$post->id}}" method="POST">

<input type="text" name="titulo" value='{{$post->title}}'>Título
<textarea name="contenido" id="contenido" cols="30" rows="10">{{$post->body}}</textarea>
<div id="categories-list"></div>
<input type="submit" value="Crear Post">Crear Post

{{ csrf_field() }}
</form>


    
</body>
</html>