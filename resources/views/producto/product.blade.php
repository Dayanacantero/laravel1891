<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Crear producto</h1>

<form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<label>
    Precio:
    <br>
    <input type="double" name="price">
</label>
<br>
<label>
    descripcion:
    <br>
    <input type="text" name="descripcion">
</label>
<br>
<label>
    Cantidad:
    <br>
    <input type="integer" name="cant">
</label>
<br>
<label>
    Fecha Expedicion:
    <br>
    <input type="date" name="date_exp">
</label>
<br>
<br>
<button type="submit">Enviar Formulario:</button>
</form>
</body>
</html>