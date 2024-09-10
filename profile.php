<?php require_once("includes/nav.php"); ?>
<div class="w-full  h-full bg-transparent col-span-5 overflow-auto">

<div class="mx-auto w-[95%]  h-[200px] bg-white relative ">

<div class="size-full">
       <img src="assets/img/apartment2.jpg" class="slider-img size-full object-cover">
</div>
<div class="left-btn left-4 top-[45%] absolute flex justify-center items-center cursor-pointer  p-2 bg-[rgb(23,23,23,.8)]">
        <i class="fa-solid fa-chevron-left fa-2x" style="color: #ffffff;"></i>
</div>
<div class="right-btn right-4 top-[45%] absolute flex justify-center items-center cursor-pointer  p-2 bg-[rgb(23,23,23,.8)]">
        <i class="fa-solid fa-chevron-right fa-2x" style="color: #ffffff;"></i>
</div>

  <div class="absolute  flex bottom-[-40%] left-[8%] gap-3 w-[40%] items-center ">
        <div class="size-[140px] rounded-full  bg-white flex justify-center items-center">
                   <img src="assets/img/<?php echo getImage($_SESSION['userid']);?>" class="size-[95%] object-cover rounded-full border-[4px] border-blue-700">
        </div>
        <div class="flex flex-col mt-9">
            <h1 class=""><?php echo getName($_SESSION['userid']); ?></h1>
            <h1 class="text-gray-500 text-[.8rem]">joined : <span  class="text-gray-500 text-[.8rem]"><?php echo getDateUser($_SESSION['userid']); ?></span></h1>
        </div>
    </div>
</div>
<div class="mx-auto w-[95%] bg-[#242424] p-2 mt-[100px] rounded-xl flex gap-4">
    <div class="bg-[#1A1A1A] p-2 rounded-lg font-thin">post : <span class="counts-place"></span></div>
    <div class="bg-[#1A1A1A] p-2 rounded-lg font-thin">liker : <span>2</span></div>
    <div class="bg-[#1A1A1A] p-2 rounded-lg font-thin">liked : <span>2</span></div>
</div>





<div class="w-[95%] p-2 mx-auto [20px] p-5 flex gap-2 flex-wrap relative justify-center profile-place">

</div>





</div>
<div class="w-full h-full p-2 bg-transparent col-span-2">
    <h1>Technalogy used</h1>
    <div class="w-full h-full">
         <div class="flex w-full p-2 bg-[#242424] mt-5 hover:bg-white transition-all">
              <a href="https://www.php.net/" target="_blank" class="w-full h-full flex justify-center items-center ">
                   <i class="text-black fa-brands fa-php fa-3x"></i>
              </a> 
         </div>
         <div class="flex w-full p-2 bg-[#242424]m bg-[#242424] mt-1 hover:bg-white transition-all">
              <a href="https://www.javascript.com/" target="_blank" class="w-full h-full flex justify-center items-center ">
                    <i class=" text-black fa-brands fa-js fa-3x"></i>
              </a> 
         </div>
         <div class="w-full grid grid-cols-2 gap-1 mt-1">
                <div class="flex justify-center items-center w-full p-2 bg-[#242424] hover:bg-white transition-all">
                       <a href="https://tailwindcss.com/" target="_blank" class="w-full h-full flex justify-center items-center">
                                 <svg class="w-[60px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 54 33"><g clip-path="url(#prefix__clip0)"><path fill="#38bdf8" fill-rule="evenodd" d="M27 0c-7.2 0-11.7 3.6-13.5 10.8 2.7-3.6 5.85-4.95 9.45-4.05 2.054.513 3.522 2.004 5.147 3.653C30.744 13.09 33.808 16.2 40.5 16.2c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C36.756 3.11 33.692 0 27 0zM13.5 16.2C6.3 16.2 1.8 19.8 0 27c2.7-3.6 5.85-4.95 9.45-4.05 2.054.514 3.522 2.004 5.147 3.653C17.244 29.29 20.308 32.4 27 32.4c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C23.256 19.31 20.192 16.2 13.5 16.2z" clip-rule="evenodd"/></g><defs><clipPath id="prefix__clip0"><path fill="#fff" d="M0 0h54v32.4H0z"/></clipPath></defs></svg>
                       </a>
                </div>

               <li class="list-none bg-[#242424] p-2 w-full transition-all hover:bg-white">
                   <a href="https://jquery.com/download/" target="_blank" class="flex w-full h-full flex justify-center items-center">
                        <?xml version="1.0" encoding="utf-8"?><svg width="800px" height="40px" viewBox="0 -198 512 512" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M489.718 8.646l21.42.118s-39.824 53.964-43.076 58.362c-1.056 1.424-2.66 2.96-3.474 4.864-2.057 4.786-4.169 15.285-4.169 15.285l-19.599.098s3.05-10.944 2.924-16.773c-.11-5.092-2.71-10.178-4.168-15.285-1.474-5.17-3.475-15.286-3.475-15.286h20.15l2.779 11.117 30.688-42.5" fill="#1A1918"/><path d="M449.157 20.027c3.953 2.383 6.379 15.529 6.379 15.529s-20.684.305-31.94.305h-9.727l-11.812 51.414h-18.064s11.242-55.874 13.896-66.004c.86-3.28 5.892-2.717 14.389-2.717h13.569c8.762 0 19.003-1.119 23.31 1.473M365.06 45.067s.563-3.3-1.91-7.122c-2.113-3.258-4.064-4.016-9.623-4.19-15.695-.493-15.39 11.138-15.39 11.138l26.923.174zm17.022-13.32c2.3 8.297-2.084 27.792-2.084 27.792s-22.894-.382-35.434 0c-3.899.119-8.566-.424-9.727 1.39-1.633 2.542.597 6.455 2.487 8.108 2.175 1.903 6.412 2.12 7.935 2.313 10.178 1.293 31.48.334 31.48.334l-3.69 16.34s-30.103 1.51-45.16-2.084c-2.973-.708-5.76-2.139-7.643-4.168-.514-.555-.96-1.312-1.446-1.966-.388-.522-1.52-2.237-2.028-3.593-3.439-9.164.403-26.72 4.169-36.128.437-1.09.986-2.473 1.564-3.648.722-1.465 1.333-3.119 1.91-3.995.388-.604.869-.993 1.272-1.563.465-.674 1.006-1.327 1.507-1.91 1.39-1.612 2.967-2.752 4.864-4.168 6.273-4.698 17.626-8.345 31.265-6.949 5.135.528 12.89 2.362 16.675 7.643 1.014 1.41 1.515 4.21 2.084 6.253zM299.229 18.49l17.516-.103s-9.762 46.307-14.737 68.888h-20.15c-14.082 0-26.623 1.744-31.959-8.338-5.176-9.789-.236-25.887 2.084-36.824 1.64-7.74 5.094-23.56 5.094-23.56l18.148-.166s-5.128 24.63-7.262 36.928c-.764 4.405-2.34 8.553-.694 11.81 1.563 3.1 3.752 3.322 10.421 3.475 2.113.05 9.033 0 9.033 0l12.506-52.11M217.244 51.84c1.834-6.516 4.509-13.582 4.169-19.454-.368-6.28-5.634-11.998-9.032-13.2-10.234-3.613-19.815 1.438-23.623 5.558-4.926 5.336-6.594 11.569-8.338 20.15-1.298 6.37-2.362 13.095 0 18.063 4.182 8.783 17.224 6.865 31.266 6.949 2.084-5.586 3.807-11.86 5.558-18.066zm24.318-25.706c2 14.548-5.676 30.606-10.964 44.57 5.392.487 10.117-.075 10.457.327.354.521-3.614 16.668-4.997 16.71-4.279.111-18.459.229-24.372.229-19.295 0-37.345 1.257-46.55-8.337-3.738-3.898-6.323-10.583-6.949-15.286-1.042-7.851.264-16.495 2.085-23.622 1.647-6.435 3.758-12.507 6.948-18.066C175.328 8.507 189.432-1.998 213.075.427c4.586.472 11.172 2.48 15.286 4.863.284.167 1.279.959 1.507 1.098 5.559 3.537 10.624 11.978 11.694 19.746zM156.193 18.574c-1.167 5.315-2.334 11.34-3.564 16.592h-19.454c1.507-5.822 2.661-11.61 4.169-16.675 6.225 0 12.013.083 18.85.083M132.48 40.03h18.76c-2.453 13.576-7.31 35.475-11.117 50.719-2.383 9.54-3.974 16.501-10.422 21.538-.577.452-.91.237-1.39.695-1.188 1.133-6.684 2.447-9.726 2.779-4.947.536-10.54.07-16.62-.055 1.591-5.815 3.391-12.798 4.809-18.01 14.82 1.794 15.195-12.214 18.064-25.706 1.66-7.796 6.691-28.834 7.642-31.96" fill="#1A1918"/><g fill="#21609B"><path d="M88.708 75.464l-.402 1.042c-6.85 13.34-18.989 21.524-36.303 21.885-8.094.167-15.806-1.91-20.844-4.168C20.287 89.338 11.142 80.279 6.148 70.6c-7.164-13.875-8.456-33.176 6.44-47.592.23 0-1.807 3.126-1.577 3.126l-.41 1.334C-.133 61.074 32.938 89.874 65.086 86.58c7.726-.792 17.578-5.023 23.622-11.116"/><path d="M69.254 61.568c8.088.055 16.536-3.725 21.539-9.032-4.377 11.11-17.05 18.251-34.044 15.98-14.23-1.904-27.785-16.223-29.181-30.571-1.021-10.442 2.618-16.674 8.615-24.234-2.084 3.954-2.863 7.003-3.057 8.948-2.278 22.588 18.044 38.79 36.128 38.909"/><path d="M89.98 33.512c-1.257 2.884-8.496 8.33-11.693 9.011-12.659 2.697-20.766-3.306-25.013-10.137-.631-1.02-1.798-3.806-2.007-4.515-1.647-5.6-.89-14.07 4.023-18.454-1.48 4.169-1.696 9.011-.917 12.159.472 1.903 1.91 5.226 3.349 7.316 2.618 3.807 4.279 4.732 7.642 6.754 1.515.91 3.14 1.64 3.842 1.84 3.189.939 9.922 3.412 20.775-3.974"/></g></g></svg>
                   </a>
               </li>
               <div class="flex justify-center items-center w-full p-2 bg-[#242424] hover:bg-white transition-all">
                       <a href="https://www.w3schools.com/html/" target="_blank" class="w-full h-full flex justify-center items-center">
                               <i class="text-black fa-brands fa-html5 fa-3x"></i>
                       </a>
                </div>

               <li class="list-none bg-[#242424] p-2 w-full transition-all hover:bg-white">
                   <a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank" class="flex w-full h-full flex justify-center items-center">
                          <i class="text-black fa-brands fa-css3-alt fa-3x"></i>  
                   </a>
               </li>
                
         </div>
         <div class="mt-4"> tools </div>
         <p class="text-gray-400 mb-2">we created this site using those tecnalogy && using awesome tool <a target="_blank" href="https://code.visualstudio.com/    " class="text-white hover:underline">visual studio code</a></p>
         <li class="list-none bg-[#242424] p-2 w-full transition-all hover:bg-white">
                   <a href="https://code.visualstudio.com/" target="_blank" class="flex w-full h-full flex justify-center items-center">
                               <img src="assets/img/vscode.png" width="100" alt="">
                   </a>
               </li>
    </div>
</div>
</section>




<?php
if(isset($_GET['logout'])){
    unset($_SESSION['userid']);
    header("Location:login.php");}?>

<?php require_once("includes/footer.php"); ?>