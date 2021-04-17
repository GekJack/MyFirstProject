<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гайды</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styleMain.css">
    <link rel="stylesheet" href="css/list.css">
    <link rel="stylesheet" href="css/comment.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<header class="col-sm-12 col-md-12 col-lg-12">
    <?php include_once('../resources/views/menu.blade.php'); ?>
</header>
        <div class="main-game">
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, aperiam. Illo perspiciatis nemo esse deleniti, asperiores incidunt ex officia animi. Delectus numquam itaque, blanditiis officiis repudiandae voluptatum recusandae exercitationem natus.</p>
            <p>Harum doloribus voluptates ab necessitatibus nemo quidem eius nisi modi asperiores ad! Explicabo atque nulla dignissimos ab corrupti reprehenderit error, accusantium excepturi ad distinctio minus recusandae officiis nemo id quasi?</p>
            <p>Odit voluptatem quis eum autem atque natus voluptatum, quas fugiat nostrum nemo itaque sit in aperiam consequuntur architecto illo error velit odio ea minima ut, necessitatibus voluptas laborum. Corrupti, explicabo.</p>
            <p>Reiciendis iure sequi laudantium, unde modi quos repellendus tempore molestiae deleniti praesentium doloremque ipsa amet veritatis fugiat. Vitae quia nobis quisquam sit ea, expedita sint voluptatum laborum, quos, minus autem.</p>
            <p>Id, at architecto cum quisquam esse consectetur facere hic placeat corrupti facilis ullam harum consequatur accusamus cumque quam nam delectus nobis vel quibusdam veniam perferendis! Dolore, distinctio nostrum. Architecto, aut.</p>
            <table class="table table-dark table-hover">
                <tr>
                    <th>Название</th>
                    <th>Студия</th>
                    <th>Год выпуска</th>
                    <th>Ссылка на офиц. сайт</th>

                </tr>
                @foreach($gameslists as $gam)
            <tr>
                <td>{{$gam->name}}</td>
                <td>{{$gam->studio}}</td>
                <td>{{$gam->year}}</td>
                <td><a href="{{$gam->link}}">Ссылка</a></td>
                @endforeach
            </table> 
                {{$gameslists->links()}} 
                <div>
                    <br>
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
    <input type="hidden" name="page" value="games">
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

     <div><br>
    </div>
        </div>
       
        


        


    <?php include_once('../resources/views/footer.blade.php') ?>
</body>
</html>