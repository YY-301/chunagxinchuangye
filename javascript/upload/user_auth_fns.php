<?php
function Stu_login ($username, $password) {
    $conn=db_connect();

    $result=$conn->query("select * from student where studentNo='$username' and stupassword= '$password'");
    if(!$result) {
        throw new Exception('could not log you in');
    }

    if($result->num_rows>0) {
        return true;

    } else {
        throw new Exception('could not log you in');
    }
}

function Tea_login ($username, $password) {
    $conn=db_connect();

    $result=$conn->query("select * from teacher where teacherNo='$username' and tpassword= '$password'");
    if(!$result) {
        throw new Exception('could not log you in');
    }

    if($result->num_rows>0) {
        return true;

    } else {
        throw new Exception('could not log you in');
    }
}

function check_valid_user () {
    if(isset($_SESSION['valid_user'])) {
        header("Location:http://localhost:63342/untitled1/javascript/upload/home.php?_ijt=pl0he0th6c7bnknoa4icjt1lln");
        //echo "Logged in as ".$_SESSION['valid_user'].".<br>";
    }else{
        echo 'You are not logged in';
        //do_html_url('login.php','Login');
        exit;
    }
}
function select_log($username){
    $conn=db_connect();
    $result=$conn->query("select * from five where studentNo='$username'");
    if(!$result) {
        throw new Exception('Null');

    }else{
        return $result;
    }
}











