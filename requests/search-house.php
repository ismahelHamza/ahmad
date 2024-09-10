<?php
require_once("../includes/init.php");

$city = $connect->clear($_POST['city']);
$room = $connect->clear($_POST['room']);
$type = $connect->clear($_POST['type']);
$query = $connect->query("SELECT * FROM post WHERE (location = '$city' && room = '$room' && type = '$type')");
echo '<a href="house.php" class="absolute top-[-10px] text-blue-400 font-thin hover:underline left-1/2">load more</a>';
$result ='';
if(mysqli_num_rows($query) > 0){
while($row = mysqli_fetch_assoc($query)){
    $result .= '
    <div class="w-[320px]">
    <div class="h-[200px] bg-red-500 w-full relative">
                       <img src="assets/img/'.  $row['image'] .'" class="w-full h-full object-cover" alt="">
                       <div class="absolute top-4 right-4">
                          <span>12</span>
                                  <span class="cursor-pointer"><i class="fa-solid fa-heart" style="color: #ffffff;"></i></span>
                       </div>
    </div>
    <h1 class="text-xl">'. $row['title'] .'</h1>
            <div class="flex gap-4">
                   <div class="flex gap-5 items-center mt-2">
                          <i class="fa-solid fa-location-pin" style="color: #54aa3c;"></i>
                          <h1 class="text-[.8rem] text-gray-300">'. $row['location'] .'</h1>
                   </div>
            </div>
            <div class="w-[90%] mx-auto p-2 border-t border-b border-gray-800 mt-4 flex justify-between">
                 <div classs="flex justify-center items-center">
                      <span class=" text-[.8rem] text-gray-600">room</span><br>
                            <i class="fa-solid fa-person-booth"></i>
                      <span>'. $row['room'] .'</span>
                 </div>
                 <div classs="flex justify-center items-center">
                      <span class=" text-[.8rem] text-gray-600">bathroom</span><br>
                      <i class="fa-solid fa-restroom"></i>
                      <span><?php echo  ?>'. $row['bath'] .'</span>
                 </div>
                 <div classs="flex justify-center items-center">
                      <span class=" text-[.8rem] text-gray-600">Garage</span><br>
                      <i class="fa-solid fa-square-parking"></i>
                      <span>'. $row['garage'] .' </span>
                 </div>
            </div>
            <div class="flex justify-between mt-6 w-[90%] mx-aut">
                <div>
                         <div class="text-2xl">for sale</div>
                         <div class="text-gray-300 ">'. $row['price'] .'.000$</div>
                </div>
                <div class="h-full h-full">
                    <button class="border mt-3 rounded-sm border-green-300 text-green-300 transition-all hover:bg-green-300 hover:text-black px-4 p-2">Preview</button>
                </div>
            </div>
</div>
    ';
}}else{
    $result = '<dotlottie-player src="https://lottie.host/7401522f-2d8b-4049-ad18-eb0edb6af224/CE9lFrNlEH.json" background="transparent"  speed="1" style="width: 300px; height: 300px" direction="1" playMode="normal" loop  autoplay></dotlottie-player>';
    
    echo "<h1 class='absolute left-[41%] top-[90%] text-3xl'>data not found</h1>";
}
echo $result;
?>