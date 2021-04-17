<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameGuide</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/styleMain.css">
    <link rel="stylesheet" href="css/email.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <header class="col-sm-12 col-md-12 col-lg-12">
        <?php include_once('../resources/views/menu.blade.php'); ?>
    </header>
    <div class="container">
        <form action="/send" method="post">
        {{ csrf_field() }}
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="Input" name="email" placeholder="name@example.com">
                <label for="Input">Email</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floating" name="message" placeholder="Password">
                <label for="floating">Сообщение</label>
            </div>
            <div class="con-but">
                <input type="submit" class="but" value="Отправить">
            </div>
            
        </form>
    </div>
   

     