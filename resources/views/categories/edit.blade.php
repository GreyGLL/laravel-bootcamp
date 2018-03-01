<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>

<body>
<form action="{{route('categories.update',$categories->id)}}" method="POST">
<input type="text" name="title" value="{{$categories->title}}">
<input type="submit" value="editar">Editar categoría

{{ csrf_field() }}
</form>
    
</body>
</html>