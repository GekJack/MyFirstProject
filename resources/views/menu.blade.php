<?php
   if(session_status() !== PHP_SESSION_ACTIVE) session_start();
   if(session_status() === PHP_SESSION_NONE) session_start();

 ?>
<nav class="navbar navbar-expand-lg menu">
  <div class="container-fluid ">
    <ul class="nav nav-pills justify-content-center nav-fill">
        <li class="nav-item">
        <a class="mlink" href="/">
        <img src="img/logo.png" alt="" id="logo" class="d-inline-block align-text-top">
        GameGuide
        </a>
        </li>
        <li class="nav-item">
            <a class="mlink" href="/games">Список игр</a>
        </li>
        <li class="nav-item">
            <a class="mlink" href="/gallery">Галерея</a>
        </li >
        <li class="nav-item">
            <a class="mlink" href="/form">Свяжитесь с нами</a>
        </li>
        <?php
             if(array_key_exists('role', $_SESSION)){
                if($_SESSION['role'] == 2 ){
                    echo('<li class="nav-item">
                    <a class="mlink" href="/admin">Админ</a>
                </li>');
               
           
        } 
                if($_SESSION['role'] == 2 || $_SESSION['role']== 1){
                    echo('<li class="nav-item">
                    <a class="mlink" href="/moder">Модер</a>
                </li>');
             } }?>
    </ul>
    
    <?php 
        if(array_key_exists('login', $_SESSION)){
            echo('<div class="log-reg-prof">
        <a class="mlink" href="/profile">'.$_SESSION['login'] .'</a> 
        <a href="/logout" class="mlink" >Выйти</a>
    </div>');
        }
        else{
            echo(' <div class="log-reg-prof">
        <a class="mlink" href="/login">Логин</a>
        <a class="mlink" href="/registration">Регистрация</a>
    </div>');
        }
    
    ?>

   
   
    
   
  </div>
</nav>