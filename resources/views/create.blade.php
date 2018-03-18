<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="../js/custom-jquery.js"></script>
    <title>Formulario</title>
</head>
<body>

<form action="form" method="POST">

<input type="text" name="titulo">Título
<textarea name="contenido" id="contenido" cols="30" rows="10"></textarea>
<div id="categories-list"></div>
<button id="button">Recargar Categorias</button>
<input type="submit" value="Crear Post">

{{ csrf_field() }}
</form>

</body>
</html>