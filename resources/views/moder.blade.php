<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moder</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styleMain.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <style>
        a{
            text-decoration:none;
            color:white;
        }
        .but{
    margin-top: 20px;
    background-color: black;
    color: white;
    border: none;
    border-radius: 10%;
    font-size: 3vw;
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
            <th>name</th>
            <th>email</th>
            <th>Коммент</th>
            <th>Страница</th>
            <th>Удалить</th>

        </tr>
        @foreach($comments as $com)
    <tr>
        <td>{{$com->id}}</td>
        <td>{{$com->name}}</td>
        <td>{{$com->email}}</td>
        <td>{{$com->comment}}</td>
        <td>{{$com->page}}</td>
        <td><a  href="/deletecom/{{$com->id}}">Удалить</a></td>
         @endforeach
         </table> 
        {{$comments->links()}}   

        <hr>


        <table class="table table-dark table-hover">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>studio</th>
            <th>year</th>
            <th>link</th>
            <th>Удалить</th>

        </tr>
        @foreach($gameslists as $gam)
    <tr>
        <td>{{$gam->id}}</td>
        <td>{{$gam->name}}</td>
        <td>{{$gam->studio}}</td>
        <td>{{$gam->year}}</td>
        <td>{{$gam->link}}</td>
        <td><a  href="/deletegame/{{$gam->id}}">Удалить</a></td>
         @endforeach
         </table> 
        {{$gameslists->links()}}   



        <hr>
        <div class="container">
            <form action="/edgame" method="post">
            {{ csrf_field() }}
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="name" placeholder="name@example.com">
                    <label for="floatingInput">Имя игры</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingPassword" name="studio" placeholder="Password">
                    <label for="floatingPassword">Студия</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingPassword" name="year" placeholder="Password">
                    <label for="floatingPassword">Год выхода</label>
                </div>
                <br>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingPassword" name="link" placeholder="Password">
                    <label for="floatingPassword">Офицыальный сайт</label>
                </div>
                <br>
                    <input class="but" type="submit" value="Добавить">
                
                
            </form>
        </div>


