<?php require_once("includes/nav.php"); ?>
<?php
$user = $connect->query("SELECT * FROM user WHERE id = '". $_GET['usersid'] ."'");
$post = $connect->query("SELECT * FROM post WHERE id = '". $_GET['postid'] ."'");
?>
<div class="mx-auto w-3/4 p-2 mt-11">
          <div class="flex w-full md:flex-wrap justify-center gap-5">
                <div class=" w-[90%] md:size-[400px] border">
                    <img src="/project/admin/assets/img/<?php  echo mysqli_fetch_array($post)['image']?>" class="size-full object-cover">
                </div>
                <div class="w-[90%] mt-5 md:w-[500px] ">
                    <p class="text-xl"><?php echo mysqli_fetch_assoc($post)['des']; ?></p>
                    <p class="mt-11 font-thin">+964 <?php echo mysqli_fetch_assoc($user)['phone'];?></p>
                </div>
       </div>
      <p class="p-2 mt-6 text-3xl text-center">view page <span class="text-sky-700">details</span></p>
           

<div class="mt-5 w-[80%] mx-auto h-[350px] relative overflow-hidden">
 <div class="z-[100] absolute lefts btnss cursor-pointer left-0  flex justify-center items-center rounded-full bg-[rgb(255,255,255,.5)] transition-all hover:bg-[rgb(255,255,255,.9)] size-[60px] top-[43%]">
          <i class="fa-solid fa-angle-left fa-2x" style="color: #000000;"></i>
 </div>
    
 <div class="h-full absolute flex gap-3   z-0 slider transition-all">
          <img src="/project/admin/assets/img/apartment2.jpg" class=" cursor-pointer w-full md:w-[400px] images">
          <img src="/project/admin/assets/img/house.jpg" class=" cursor-pointer w-full md:w-[400px] images">
          <img src="/project/admin/assets/img/house2.jpg" class=" cursor-pointer w-full md:w-[400px] images">
 </div>
  
 <div class="z-[100] btnss rights absolute cursor-pointer right-0  flex justify-center items-center rounded-full bg-[rgb(255,255,255,.5)] transition-all hover:bg-[rgb(255,255,255,.9)] size-[60px] top-[43%]">
          <i class="fa-solid fa-angle-right fa-2x" style="color: #000000;"></i>
 </div>
</div>



</div>


<div class="close z-[1000] show-image fixed top-0 h-screen w-screen left-[-200%] bg-[rgb(0,0,0,.8)] flex justify-center items-center">
    <img src="/project/admin/assets/img/apartment2.jpg" class="object-cover image-place size-[70%] rounded">
    <div class="cursor-pointer close list-none absolute top-11 right-11">
           <i class="fa-solid fa-xmark fa-3x" style="color: #ffffff;"></i>
   </div>
</div>

<div class="font-thin w-full p-2 bg-black text-center mt-4">
    created by ismahel hamza&&<span class="year">00000</span> year
</div>
<?php
if(isset($_GET['logout'])){
    unset($_SESSION['userid']);
    header("Location:login.php");}?>

<?php require_once("includes/footer.php"); ?>
