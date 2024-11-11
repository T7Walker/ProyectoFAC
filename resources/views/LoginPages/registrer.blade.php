<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('loginPages.registrer') }}" method="POST" enctype="multiplart/form-data">


    @csrf 

    <label>Nombre:</label>
    <input type="text" name="name">
    <br>
    <label>Correo Electronico:</label>
    <input type="text" name="Company">
    <br><br>
    <button type="submit">Enviar Formulario</button>


    </form>
    
</body>
</html>