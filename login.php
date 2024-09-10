<?php require_once("includes/nav.php"); ?>
<?php
if(isset($_SESSION['userid'])){
  header("Location:home.php");
}
?>

<div class="h-screen w-screen  flex">
  <div class=" p-2 w-full flex justify-end items-center object-cober" >
    <img src="assets/img/programmer.png" class="w-[90%] h-[90%]">
  </div>
  <div class=" p-2 w-full flex flex-col justify-center gap-2">
    <div class="w-full flex flex-col justify-center gap-2">         
          <div class="text-3xl">login for free</div>
          <div class="text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing <br> elbero facere quisquam.</div>
          <?php if(isset($_GET['warning'])){echo "<div class='w-[230px] p-4 border border-green-700 rounded bg-green-400 text-white'>success please login to <br>your account</div>";}?>
          <form  action="" method="post" class="flex flex-col gap-1">

              <input type="text" name="email" class="text-black w-[230px] p-4 outline-none bg-gray-200" id="email" placeholder="email">
              <input type="password" name="password" class="text-black w-[230px] p-4 outline-none bg-gray-200" id="password" placeholder="password">
            
                 
                 <div class="flex items-center mt-2">
                        <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="link-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">terms <br> and conditions</a>.</label>
                </div>
                <button name="submit" class="login-btn w-[230px] p-3 mt-7 rounded hover:bg-sky-600 outline-none bg-sky-500 text-white">create</button>
                 <a href="index.php" class="text-sky-700 text-[.9rem] hover:underline"> don't have account ?</a>
          </form>
    </div>

  </div>
</div>




<?php require_once("includes/footer.php"); ?>

