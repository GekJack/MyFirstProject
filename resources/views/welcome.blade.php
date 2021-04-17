
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
</head>
<body>
    <header class="col-sm-12 col-md-12 col-lg-12">
        <?php include_once('../resources/views/menu.blade.php'); ?>
    </header>
    <div class="main">
        <div class="welcome">
            Добро пожаловать, Путник
        </div>
        <div class="slider-wrap">
            <div class="slider">
                <img id="1" src="img/slider/sl-1.png" class="sl-pc" alt=""> 
                <img id="2" src="img/slider/sl-2.png" class="sl-pc" alt=""> 
                <img id="3" src="img/slider/sl-3.png" class="sl-pc" alt=""> 
                <img id="4" src="img/slider/sl-4.png" class="sl-pc" alt=""> 
                <img id="5" src="img/slider/sl-5.png" class="sl-pc" alt="">
            </div>
        </div>
        <div class="about">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi quo mollitia ab repellendus! Tempora corporis ex nobis vero repellendus autem, deserunt officia quaerat neque culpa qui odit quos! Minima, tempore?</p>
            <p>Autem qui ex tenetur asperiores, perspiciatis esse hic eius maxime, ipsam doloribus non aperiam porro ducimus at eveniet eos facere quisquam. Iure quam eos animi? Ea qui molestiae molestias hic!</p>
            <p>Eveniet facere iure aperiam harum quo quod sunt odio vitae at corrupti consequuntur quaerat enim aliquam commodi nesciunt officia neque, similique fugit quos pariatur nobis voluptas, velit expedita. Nobis, iste?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, sapiente eius rerum sit in iste illo sequi dignissimos animi corporis, eaque magnam earum rem accusamus fugit itaque ducimus quasi maxime.</p>
            <p>Voluptate eaque rerum sed odit, deserunt commodi ipsum officia totam facere molestias numquam omnis optio, iusto sit pariatur dignissimos at neque mollitia placeat ducimus facilis veritatis laudantium, nemo repudiandae. Laudantium.</p>
            <p>Tempore, ratione eligendi commodi nulla voluptatum harum necessitatibus natus ipsa molestiae fuga iusto ut rem odit veritatis accusamus culpa quod labore dolores fugiat aperiam et ab non. Voluptates, hic mollitia!</p>
        </div>
    </div>
    
    

    <?php include_once('../resources/views/footer.blade.php') ?>


     <script src="js/slider.js" ></script>
</body>
</html>