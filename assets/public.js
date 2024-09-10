$(document).ready(function () {
    $(".lists").hide();
  $(".about").hover(function () {
      $(".ma").css("margin-top" , "5px");
      $(".lists").show();
          
      }
  );

  $(".log").click(function(){
    window.location.href = "login.php";
  })

});
$(".mode").click(function (e) { 
  e.preventDefault();
  const child = $(this).children("div");
  $(this).toggleClass("justify-end");
  $(document.body).toggleClass("bg-white");
});






