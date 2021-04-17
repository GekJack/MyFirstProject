<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галерея</title>
    <link rel="stylesheet" href="css/styleMain.css">
    <link rel="stylesheet" href="css/comment.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <header>
        <?php include_once('../resources/views/menu.blade.php')   ?>
    </header>
        <div class="gal" >
            <img src="img/Gallery/1.png" alt="">
            <div>Человек в маске</div>
        </div>
        <div class="gal">
            <img src="img/Gallery/2.png" alt="">
            <div>Самурай</div>
        </div>
        <div class="gal">
            <img src="img/Gallery/3.png" alt="">
            <div>Ведьмак</div>
        </div>
        <div class="gal">
            <img src="img/Gallery/4.png" alt="">
            <div>Пират</div>
        </div>
    

    <div class="writecom">

    </div>
    <?php   
        if (array_key_exists('login', $_SESSION)) {
    ?> 
        <div class="container">
           @foreach($comments as $com)
        <div class="seecomment">
            <div class="nickname"> Nickname: {{$com->name}} Email:{{$com->email}}</div>
                {{$com->comment}}
        </div>
        @endforeach
        {{$comments->links()}}   
        </div>
        
    <?php
        }
    ?> 
  
       
    

    <div class="comment" >
    <div class="head">Комментарий</div>
    <form action="/comment" method="post">
    {{ csrf_field() }}
    <div class="mb-3">
    <input type="email" class="form-control" name="email" placeholder="почта@пример.com">
    </div>
    <input type="hidden" name="page" value="gallery">
    <div class="mb-3">
    <textarea class="form-control" name="comment" rows="3"></textarea>
    </div>
    <?php 
        if (array_key_exists('login', $_SESSION)) {
            echo('<div class="sub">
        <input type="submit" value="Написать">
    </div>');
        }
        else{
            echo(' <div class="red">Что бы писать и видеть коментарии войдите в аккаунт или зарегестрируйтесь</div>');
        }
    ?>
       
    </form>
    </div>

    <?php include_once('../resources/views/footer.blade.php') ?>
    
</body>
</html>