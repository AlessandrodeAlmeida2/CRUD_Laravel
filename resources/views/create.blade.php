<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   <h1 class="text-center">@if(isset($book))Editar @else Cadastrar @endif</h1>
    <div class="col-8 m-auto">

        @if(isset($errors) && count($errors)>0)   
            <div class="text-center mt-4 mb-4 p-2">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif

        @if(isset($book))
            <form action="formEdit" id="formEdit" method="post" action="{{url('books/$book->id')}}">
                @method('PUT')
        @else
            <form action="formCad" id="formCad" method="post" action="{{url('books')}}">
        @endif

            @csrf
            <input class="form-control" type="text" name="title" id="title" placeholder="Título:" value="{{$book->title ?? ''}}" required>
            <select class="form-control" name="id_user" id="id_user" required>
                <option value="{{$book->relUsers->id ?? ''}}">{{$book->relUsers->name ?? 'Autor'}}</option>
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
            <input class="form-control" type="text" name="pages" id="pages" placeholder="Páginas:" value="{{$book->pages ?? ''}}" required>
            <input class="form-control" type="text" name="price" id="price" placeholder="Preço:" value="{{$book->price ?? ''}}" required>
            <input class="btn btn-primary" type="submit" value="@if(isset($book))Editar @else Cadastrar @endif">
        </form>
        
   </div>
   <script src="{{url("assets/js/javascript.js")}}"></script>
</body>
</html>
