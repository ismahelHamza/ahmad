<?php
require_once("../includes/init.php");
$postid = $connect->clear($_POST['postid']);
$liker = $connect->clear($_POST['liker']);
$owner = $connect->clear($_POST['owner']);

$query = $connect->query("SELECT * FROM `like` WHERE liker_id = '$liker' AND post_id = '$postid'");
$result = mysqli_num_rows($query);
if($result == 0)
       $insert = $connect->query("INSERT INTO `like` (post_id , liker_id , owner_post_id) VALUES ('$postid' , '$liker' , '$owner')");
else 
       $delete = $connect->query("DELETE FROM `like` WHERE liker_id = '$liker' AND post_id = '$postid'");
       
?>