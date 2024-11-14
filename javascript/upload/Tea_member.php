<?php
require_once('innovationcenter_fns.php');
session_start();

if(!isset($_POST['username']))
    $_POST['username'] = " ";
$username = $_POST['username'];

if(!isset($_POST['password']))
    $_POST['password'] = " ";
$password = $_POST['password'];

if($username && $password){
    try{
        Tea_login($username, $password);
        $_SESSION['valid_user'] = $username;
    }
    catch(Exception $e){
        echo 'You could not be logged in, please try again later.';
        //do_html_url('login.php', 'Login');
        exit;
    }
}

check_valid_user();
//if($url_array=get_user_urls($_SESSION['valid_user'])){
//    display_user_urls($url_array);
//}
//
//display_user_menu();
//?>







