<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameGuide</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styleMain.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        a{
            text-decoration:none;
            color:white;
        }
    </style>
</head>
<body>
    <header class="col-sm-12 col-md-12 col-lg-12">
        <?php include_once('../resources/views/menu.blade.php'); ?>
    </header>
        <table class="table table-dark table-hover">
        <tr>
            <th>id</th>
            <th>login</th>
            <th>email</th>
            <th>ban</th>
            <th>role</th>
            <th>Удалить</th>
            <th>Забанить</th>
            <th>Разбанить</th>
            <th>#@#</th>
            <th>@#@</th>

        </tr>
        @foreach($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->login}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->ban}}</td>
        <td>{{$user->role}}</td>
        <td><a href="/delete/{{$user->id}}">Удалить</a></td>
        <td><a href="/ban/{{$user->id}}">Забанить</a></td>
        <td><a href="/unban/{{$user->id}}">Разбанить</a></td>
        <td><a href="/changeC/{{$user->id}}">Изменит на юзера</a></td>
        <td><a href="/changeM/{{$user->id}}">Изменить на модера</a></td>
    </tr>
        @endforeach
       
       

    
       
       
</table> 
    {{$users->links()}}
    </body>