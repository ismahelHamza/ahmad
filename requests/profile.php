

<?php
require_once("../includes/init.php");
$query = $connect->query("SELECT * FROM post");
$query2 = $connect->query("SELECT * FROM post WHERE userid = '" . $_SESSION['userid'] . "'");

$result = "";

if(mysqli_num_rows($query2) > 0){
 while($row = mysqli_fetch_assoc($query)){ 
 if($row['userid'] == $_SESSION['userid']){ 
          $result .='
          <div class="w-[320px]">
          <div class="h-[200px] bg-red-500 w-full relative">
                             <img src="assets/img/'. $row['image'] .'" class="w-full h-full object-cover" alt="">
                              <div class="absolute top-3 left-3 flex gap-3 items-center">
                                       <div class="size-[40px] rounded-full bg-blue-700 flex justify-center items-center">
                                            <img src="assets/img/'. getImage($row['userid']) .'" class="object-cover border-[2px] border-white size-[90%] rounded-full">
                                       </div>
                                       <div><a href="profile.php" class="hover:underline">'. getName($row['userid'])  .'</a></div>
                              </div>
                              <div class="absolute top-4 right-4 hurd" data-id="'. $row['id'] .'" data-liker="'. $_SESSION['userid'] .'" data-owner="'. $row['userid'] .'">
                                <span>'. countLike($row['id']) .'</span>
                                <span class="cursor-pointer"><i class="fa-'. hardthin($_SESSION['userid'] , $row['id']) .' fa-heart" style="color: #ffffff;"></i></span>
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
                            <span>'. $row['bath'] .'</span>
                       </div>
                       <div classs="flex justify-center items-center">
                            <span class=" text-[.8rem] text-gray-600">Garage</span><br>
                            <i class="fa-solid fa-square-parking"></i>
                            <span>'. $row['garage'] .'</span>
                       </div>
                  </div>
                  <div class="flex justify-between mt-6 w-[90%] mx-aut">
                      <div>
                               <div class="text-2xl">for sale</div>
                               <div class="text-gray-300 ">'. $row['price']  .'.000$</div>
                      </div>
                      <div class="h-full h-full">
                          <button class="border mt-3 rounded-sm border-green-300 text-green-300 transition-all hover:bg-green-300 hover:text-black px-4 p-2">Preview</button>
                      </div>
                  </div>
</div>
          ';       
   }}}else{
       $result = '<dotlottie-player src="https://lottie.host/7401522f-2d8b-4049-ad18-eb0edb6af224/CE9lFrNlEH.json" background="transparent"  speed="1" style="width: 300px; height: 300px" direction="1" playMode="normal" loop  autoplay></dotlottie-player>';
    }
    echo $result;
    ?>