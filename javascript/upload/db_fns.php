<?php
function db_connect(){
    $result=mysqli_connect("localhost","root","yymana518722",'innovationcenter');
    if(!$result){
        throw new Exception("Database Connection Failed:".mysqli_connect_error());

    }else{
        return $result;
    }
}
?>