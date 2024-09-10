<?php
require_once("../includes/init.php");
$password = $connect->clear($_POST['password']);
$email = $connect->clear($_POST['email']);

$query = $connect->query("SELECT * FROM user WHERE email = '$email' AND password = '$password'");
if(mysqli_num_rows($query) > 0){
  $_SESSION['userid'] = mysqli_fetch_assoc($query)['id'];
  echo "success";
}else{
    echo "not exist";
}

?>