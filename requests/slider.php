<?php
require_once("../includes/init.php");

$image_array = [];

$query = $connect->query("SELECT * FROM post WHERE userid = ". $_SESSION['userid']);

while($row = mysqli_fetch_assoc($query)) {
    $image_array[] = $row['image'];
}

// Encode the array as JSON and send it
echo json_encode(array('data' => $image_array));
?>
