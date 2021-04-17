<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Логин</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styleMain.css">
    <link rel="stylesheet" href="css/form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <header class="col-sm-12 col-md-12 col-lg-12">
        <?php include_once('../resources/views/menu.blade.php'); ?>
    </header>
    <div class="container reg">
        <form action="/log" method="post">
        {{ csrf_field() }}
        <label for="inputlog" class="form-label">Логин</label>
        <input type="text" id="inputlog" class="form-control" name="login" >
        <label for="inputPassword5" class="form-label">Пароль</label>
        <input type="password" id="inputPassword5" class="form-control" name="password" >
             <input type="submit" class="but" value="Войти">
        </div>
        </form>
    </div>

</body>
</html>