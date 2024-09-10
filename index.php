<?php require_once("includes/nav.php"); ?>
<div class="h-screen w-screen  flex">
  <div class=" p-2 w-full flex justify-end items-center object-cober" >
    <img src="assets/img/programmer.png" class="w-[90%] h-[90%]">
  </div>
  <div class=" p-2 w-full flex flex-col justify-center gap-2">
    <div class="w-full flex flex-col justify-center gap-2">         
          <div class="text-3xl">sign up for free</div>
          <div class="text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing <br> elbero facere quisquam.</div>
          <div class="flex flex-col gap-1">
            <li class="list-none flex">

              <div class="flex flex-col gap-1">
                    <input type="text" class="w-[230px] p-4 outline-none bg-gray-200 text-black" id="username" placeholder="fullname">
                    <input type="email"  class="w-[230px] p-4 outline-none bg-gray-200 text-black" id="email" placeholder="email">
                    <input type="password"  class="w-[230px] p-4 outline-none bg-gray-200 text-black" id="password" placeholder="password">
                    <input type="password"  class="w-[230px] p-4 outline-none bg-gray-200 text-black" id="c-password" placeholder="c-password">
               </div>

               <div class="con ml-4 flex flex-col items-start gap-6">
                    <div class="flex con-place1 gap-2 items-center text-[.8rem]">
                           <img src="assets/img/per.png" width="15" alt="">
                           <span class="text-red-600">must contain uppercase</span>
                    </div>
                    <div class="flex gap-2 con-place2 items-center text-[.8rem]">
                           <img src="assets/img/per.png" width="15" alt="">
                           <span class="text-red-600">must contain number</span>
                    </div>
                    <div class="flex gap-2 items-center con-place3 text-[.8rem]">
                           <img src="assets/img/per.png" width="15" alt="">
                           <span class="text-red-600">must contain lowercase</span>
                    </div>

                    <div class="flex gap-2 items-center con-place4 text-[.8rem]">
                           <img src="assets/img/per.png" width="15" alt="">
                           <span class="text-red-600">at least 6 charecter</span>
                    </div>
                    <div class="flex gap-2 items-center con-place5 text-[.8rem]">
                           <img src="assets/img/per.png" width="15" alt="">
                           <span class="text-red-600">must contain symbol</span>
                    </div>
                    <div class="warning p-2 rounded border-2 text-white text-[.8rem] border-red-700 bg-red-400">
                              
                    </div>
               </div>


             </li>
                 
                 <div class="flex items-center mt-2">
                        <input id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="link-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">terms <br> and conditions</a>.</label>
                </div>
                <button  class="signin-btn w-[230px] p-3 mt-7 rounded hover:bg-sky-600 outline-none bg-sky-500 text-white">create</button>
                 <a href="login.php" class="text-sky-700 text-[.9rem] hover:underline"> already have account ?</a>
          </div>
    </div>

  </div>
</div>

<?php require_once("includes/footer.php"); ?>

