<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userM;
use Illuminate\Support\Facades\DB;
session_start(); 
class userController extends Controller
{
    public function register(){
        if (isset($_POST['login'])) {
            $login = $_POST['login'];
        }
        else{
            echo('Введите логин');
        }
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
        }
        else{
            echo('Введите почту');
        }
        if (isset($_POST['password'])) {
            $password = $_POST['password'];
        }
        else{
            echo('Введите пароль');
        }
        $login= htmlspecialchars($login);
        $email= htmlspecialchars($email);
        $password= htmlspecialchars($password);
        $login=stripslashes($login);
        $email=stripslashes($email);
        $password=stripslashes($password);
        $log = $login;
        $em = $email;
        $pas = md5($password);
        userM::reg($log, $pas, $em);
        
    }

    public function login(){
        if (isset($_POST['login'])) {
            $login = $_POST['login'];
        }
        else{
            echo('Введите логин');
        }
        if (isset($_POST['password'])) {
            $password = $_POST['password'];
        }
        else{
            echo('Введите пароль');
        }
        $login= htmlspecialchars($login);
        $password= htmlspecialchars($password);
        $login=stripslashes($login);
        $password=stripslashes($password);
        $log = $login;
        $pas = md5($password);
        userM::log($log, $pas);
        return view('welcome');
    }

    public function off(){
        unset($_SESSION['role']);
        unset($_SESSION['login']);
        session_destroy(); 
        return view('welcome');
        
    }
   
    public function commonuser($id){
        userM::CM($id);
        echo('<a href="/admin">вернутся</a>');
    }
    public function moder($id){
        userM::MM($id);
        echo('<a href="/admin">вернутся</a>');
    }
    public function destroy($id) {
        userM::del($id);
        echo('<a href="/admin">вернутся</a>');
    }
    public function ban($id){
        userM::ban($id);
        echo('<a href="/admin">вернутся</a>');

    }
    public function unban($id){
        userM::unban($id);
        echo('<a href="/admin">вернутся</a>');

    } 
    public function deletecom($id){
        userM::deletecom($id);
        echo('<a href="/moder">вернутся</a>');
    }
    public function deletegame($id){
        userM::deletegame($id);
        echo('<a href="/moder">вернутся</a>');
    }
    public function allusers(){
        $users = DB::table('users')->paginate(6);
        return view('admin.admin', ['users' => $users]);
    }
    public function edgame(){
        $name = $_POST['name'];
        $studio = $_POST['studio'];
        $year = $_POST['year'];
        $link = $_POST['link'];
        userM::edgame($name, $studio,$year, $link);
        echo('Игра добавлена. <a href="/moder">вернутся</a>');

    }
    public function gallerycom(){
        $coms = DB::table('comment')->where('page','gallery')->paginate(5);
        return view('gallery', ['comments'=>$coms]);
    }
    public function moderpage(){
        $coms = DB::table('comment')->paginate(5);
        $gams = DB::table('gamelist')->paginate(5);
        return view('moder',  ['comments'=>$coms, 'gameslists'=>$gams]);
    }
    public function games(){
        $gams = DB::table('gamelist')->paginate(5);
        $coms = DB::table('comment')->where('page','games')->paginate(5);
        return view('game',  ['comments'=>$coms, 'gameslists'=>$gams]);
    }
    public function send(){
        $to = 'mihawarspa@gmail.com';
        $from = $_POST['email'];
        $message = $_POST['message'];
        $message = 'От:'.$from.'Сообщение'.$message;
        mail($to, 'GameGuide',$message);
        return view('welcome');
    }

      
  public function editcomment(){
      $nickname = $_SESSION['login'];
      $email = $_POST['email'];
      $com = $_POST['comment'];
      $page = $_POST['page'];
      userM::savecom($nickname, $email, $com, $page);
      return view('welcome');
  }



}

