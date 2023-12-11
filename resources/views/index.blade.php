<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>CRUD com Laravel</title>
</head>
<body class="text-center">
    <h1>CRUD com Laravel</h1>
    <br>
    
    <div class="text-center mt-3 mb-4">
        <a href="{{url('books/create')}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>

    <div class="col-8 m-auto">
        @csrf
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Preço</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($book as $books)
                    @php
                        $user=$books->find($books->id)->relUsers;
                    @endphp
                    <tr>
                        <th scope="row">{{$books->id}}</th>
                        <td>{{$books->title}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$books->price}}</td>
                        <td>
                            <a href="{{url("books/$books->id")}}">
                                <button class="btn btn-dark">Visualizar</button>
                            </a>
                            <a href="{{url("books/$books->id/edit")}}">
                                <button class="btn btn-primary">Editar</button>
                            </a>
                            <a href="{{url("books/$books->id")}}" class="js-del">
                                <button class="btn btn-danger">Deletar</button>
                            </a>
                        </td>

                    </tr>

                @endforeach

            </tbody>
        </table>
        {{$book->links('pagination::bootstrap-5')}}
    </div>
    <script src="{{url("assets/js/javascript.js")}}"></script>
</body>
</html>

