<?php

namespace App;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class userM extends Model
{
    static function reg($log, $pas , $em){
        $logs = DB::table('users')->where('login', $log)->count();
        if ($logs!=0) {
            echo('Данный логин занят');
        }
        else{
            $emails = DB::table('users')->where('email', $em)->count();
            if ($emails !=0) {
                echo('Даная почта уже используется');
                
            }
            else{
                 DB::table('users')->insert(['login'=>$log, 'email'=>$em, 'password'=>$pas]);
                 echo (view('user.login'));
            }
        }
       
    }
    
    static function savecom($nickname, $email, $com, $page){
        DB::table('comment')->insert(['name'=>$nickname, 'email'=>$email, 'comment'=>$com, 'page'=>$page]);
    }
    static function edgame($name, $studio,$year, $link){
        DB::table('gamelist')->insert(['name'=>$name, 'studio'=>$studio, 'year'=>$year, 'link'=>$link]);
    }
    static function deletecom($id){
        DB::table('comment')->where('id', $id)->delete();
    }
    static function deletegame($id){
        DB::table('gamelist')->where('id', $id)->delete();
    }
    static function del($id){
        DB::table('users')->where('id', $id)->delete();
    }
    static function ban($id){
        DB::table('users')->where('id', $id)->update(['ban'=>1]);
    }
    static function unban($id){
        DB::table('users')->where('id', $id)->update(['ban'=>0]);
    }
    static function CM($id){
        DB::table('users')->where('id', $id)->update(['role'=>0]);
    }
    static function MM($id){
        DB::table('users')->where('id', $id)->update(['role'=>1]);
    }

    static function log($log, $pas){
        $res_pass = DB::table('users')->where('login', $log)->value('password');
        $res_role = DB::table('users')->where('login', $log)->value('role');
        $res_ban = DB::table('users')->where('login', $log)->value('ban');
        
        if ($res_pass == null) {
            echo('Неверный логин');
        }
        else{
            if ( $res_pass == $pas) {
                if ($res_ban  == 1) {
                    echo('Вы забанены. Можете обратится в техническую поддержку (<a href="/form">Ссылка</a>)');
                }
                else{
                    $_SESSION['login'] = $log;
                    $_SESSION['role'] = $res_role;
                }
                
            }
            else{
                echo('Пароль неверный');
            }
        }
    }
}
