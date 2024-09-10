<?php
function getName($data){
    global $connect;
$query = $connect->query("SELECT * FROM user WHERE id = '$data'");
$result = mysqli_fetch_assoc($query)['fname'];
return $result;
}
function getImage($data){
    global $connect;
$query = $connect->query("SELECT * FROM user WHERE id = '$data'");
$result = mysqli_fetch_assoc($query)['photo'];
return $result;
}
function getDateUser($data){
    global $connect;
$query = $connect->query("SELECT * FROM user WHERE id = '$data'");
$result = mysqli_fetch_assoc($query)['joined'];
return $result;
}
function counts($data){
    global $connect;
    $query = $connect->query("SELECT * FROM post WHERE userid = '$data'");
    $result = mysqli_num_rows($query);
    return $result;
}
function countLike($postid){
global $connect;
$query = $connect->query("SELECT * FROM `like` WHERE post_id = '$postid'");
return mysqli_num_rows($query);
}

function hardthin($liker , $postid){
global $connect;
$query = $connect->query("SELECT * FROM `like` WHERE post_id = '$postid' AND liker_id = '$liker'");
if(mysqli_num_rows($query) == 0)
   return "regular";
else
   return "solid";
}
?>