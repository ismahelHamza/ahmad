<?php
    require_once("../includes/init.php");
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $username = $connect->clear($_POST['username']);
    $password = $connect->clear($_POST['password']);
    $email = $connect->clear($_POST['email']);
    $confirm_password = $connect->clear($_POST['confirm_password']);

    $query = $connect->query("SELECT * FROM user WHERE email = '$email'");
    $count = mysqli_num_rows($query);

    if(empty($username) || empty($email) || empty($password) || empty($confirm_password)){
        echo "please all field are required";
    }elseif($password != $confirm_password){
        echo "password's are not the same";
    }elseif($count > 0){
        echo "email already exist!";
    }else{
        $date = date("d/m/20y");
        $insert = $connect->query("INSERT INTO user (fname , email , password , joined) VALUES ('$username' , '$email' , '$password' , '$date')");
        echo "success";
    }

}
?>