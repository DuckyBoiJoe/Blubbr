<?php
    session_start();
    $_SESSION['username'] = $name;
    header('location:home.php');

    $con = mysqli_connect('localhost','root');

    mysqli_select_db($con, 'users');

    $name = $_POST['user'];
    $pass = $_POST['password'];

    $s = " select * from `users` where (`username`) = ('$name')";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        echo" Username is already taken.";
    }else{
        $reg= " insert into users(name , password) values ('$name' , '$pass')";
        $_SESSION['username'] = $name;
    }



    

?>