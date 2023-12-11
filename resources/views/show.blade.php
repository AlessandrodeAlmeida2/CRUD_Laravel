<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>CRUD com Laravel</title>
</head>
<body class="container">
    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
        <h1>Visualizar</h1>
    
        <div class="text-center">
            @php
            $user=$book->find($book->id)->relUsers;
            @endphp
            Título: {{$book->title}}<br>
            Páginas: {{$book->pages}}<br>
            Preço R$: {{$book->price}}<br>
            Autor: {{$user->name}}<br>
            Email do autor: {{$user->email}}<br>
        </div>
    </div>
    
    <script src="{{url("assets/js/javascript.js")}}"></script>
</body>
</html>
