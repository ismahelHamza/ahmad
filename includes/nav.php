<?php require_once("init.php"); 
error_reporting(E_ERROR | E_PARSE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        *
        {
            font-family: Roboto;
            color: white;
        }
       ::-webkit-scrollbar {
    width: 10px;
    }
  
  /* Track */
  ::-webkit-scrollbar-track {
    background: transparent; 
  }
  ::-webkit-scrollbar-thumb {
  background: #242424; 
  border-radius: 10px;
}
    </style>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
    <title>Document</title>
</head>
    <body class="bg-[#1A1A1A] h-screen">
        <?php if(isset($_SESSION['userid'])){ ?>
    <nav class="nav w-full p-2 py-4 bg-[#1A1A1A] border-b border-slate-600 flex items-center justify-between">
    <section class="flex items-center gap-4">
        <a href="home.php" class="flex items-center gap-2">  <i class="fa-brands fa-product-hunt fa-3x"></i>  <span class=" text-[1.5rem]">Product</span></a>
        <input type="text" class="bg-transparent border border-gray-700 p-2 rounded-full w-[100px] transition-all focus:w-[200px]"  placeholder="user...">
        <i class="fa-solid fa-magnifying-glass "></i>
   </section>

       <li class="list-none"></li>
       <section class="flex mr-5">
           <li class="list-none flex gap-8 items-center mr-9">
            <span class="text-[.9rem] relative transition-all hover:text-gray-400 about cursor-pointer">About 
                <i class="absolute ml-1 ma transition-all fa-solid fa-chevron-down"></i>
                  <div class="transition-all absolute z-1 lists flex flex-col bg-[#1A1A1A] gap-2 border-[.5px] border-gray-500 rounded w-[150px] p-2 left-[-100px] top-[30px]">
                     <span class="text-[.9rem] text-gray-300 hover:text-white transition-all">About us</span> 
                     <span ce hamzlass="text-[.9rem] text-gray-300 hover:text-white transition-all">About website</span>
                  </div>
            </span>
            <span class="text-[.9rem] transition-all hover:text-green-300"><a href="">Technalogy</a></span>
            <span class="text-[.9rem]  transition-all hover:text-green-300"><a href="">Blog</a></span>
            <span class="text-[.9rem]  transition-all hover:text-green-300"><a href="">Product</a></span>
            <span class="text-[.9rem]  transition-all hover:text-green-300"><a href="">Home</a></span>
        </li>
       <li class="list-none flex items-center mr-5">
                <a href="?logout" class="log text-white text-[.9rem] hover:text-green-300 font-thin border-r border-x border-x-gray-700 px-2">Logout</a>
       </li>
       <li class="list-none">
        <div class="border transition-all  w-[60px] h-[30px] rounded-full p-[1px] mr-5 cursor-pointer flex justify-end mode ">
              <div class=" h-full text-black bg-white w-1/2 rounded-full flex justify-center items-center">
                  <i class="fa-regular fa-moon text-black"></i>
              </div>
        </div>
       </li>
         <li class="list-none flex gap-3">
            <span class="text-white" ><a href=""><i class="fa-brands fa-github fa-2x"></i></a></span>
            <span class="text-white"><a href=""><i class="fa-brands fa-facebook w-full fa-2x"></i></a></span>
            <span class="text-white"><a href=""><i class="fa-brands fa-instagram w-full fa-2x"></i></a></span>
            <span class="text-white"><a href=""><i class="fa-brands fa-whatsapp w-full fa-2x"></i></a></span>
          </li>

       </section>

    </nav>
    <?php 
    $usersid = "";
      if(isset($_GET['usersid']) && isset($_GET['postid'])){ 
       $usersid =   $_GET['usersid'];
      }
    if($_SERVER['REQUEST_URI'] != "/project/admin/view.php?usersid=". $_GET['usersid'] ."&postid=". $_GET['postid'] .""){ ?>
     <section class="w-full h-[87vh] grid grid-cols-9">
          <div onmouseover="showitem()" onmouseleave="hideitem()" class="w-full p-2 h-full bg-transparent col-span-2 border-r border-gray-700">
            <div class="text-3xl transition-all"><span class="hash text-green-400 transition-all">#</span> introduction</div>
            <div class="border-t p-2 mt-3 w-[60%] mx-auto border-b border-white flex justify-between">
                <div>light</div>
                        <div class="border ml-4 transition-all  w-[40px] h-[20px] rounded-full p-[1px] mr-5 cursor-pointer flex justify-end mode ">
                                <div class=" h-full text-black bg-white w-1/2 rounded-full flex justify-center items-center">
                                    <i class="fa-regular fa-moon text-black"></i>
                                </div>
                        </div>
                 <div>Dark</div>
            </div>
            <ul class="mt-8 ml-6">
                <li class="list-none">pages</li>
                <ul class="ml-3 text-gray-500">
                    <li class="list-none text-gray-400 hover:text-white transition-all"><a href="home.php">Home page</a></li>
                    <li class="list-none text-gray-400 hover:text-white transition-all"><a href="house.php">House || apartment</a></li>
                    <li class="list-none text-gray-400 hover:text-white transition-all"><a href="profile.php">personal Profile</a></li>
                </ul>
            </ul>
          </div>

    <?php }} ?>
  
    <?php
    //  class="text-gray-500 text-[.8rem]"
        if(!isset($_SESSION['userid']) && $_SERVER['REQUEST_URI'] != "/project/admin/login.php" && $_SERVER['REQUEST_URI'] != "/project/admin/index.php"){
            header("Location:login.php");
        }
        
    ?>

    <script>
         $(".hash").css("opacity" , "0");
        function showitem(){
            $(".hash").css("opacity" , "1");
        }
        function hideitem(){
            $(".hash").css("opacity" , "0");
        }
    </script>

   

    



