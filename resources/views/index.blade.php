<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>

<body>
    @foreach ($categories as $item)
        <ul>
            <li><a href="/posts/{{$item->id}}">{{$item->title}}</a></li>
        </ul>
    @endforeach
    <b>
        <a href="form">CREAR POST</a>
    </b>
    @foreach($posts as $post)
    <h1>{{$post->id}}</h1>
    <h3>{{$post->title}}</h3>
    <h4>{{$post->category->title}}</h4>
    <p>{{$post->body}}</p>
    <a href="form/{{$post->id}}/edit">Editar post</a>
    <a href="delete/{{$post->id}}">Delete post</a>
    @endforeach
</body>

</html>