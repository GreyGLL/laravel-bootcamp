<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorias</title>
</head>

<body>
@foreach ($categories as $category)
    <ul>
        <li><a href="{{route('categories.edit',$category->id)}}">{{$category->title}}</a></li>
    </ul>
@endforeach

    
</body>
</html>