let con = $(".con");
con.hide();
let con_place1 =  $(".con-place1");
let con_place2 =  $(".con-place2");
let con_place3 =  $(".con-place3"); 
let con_place4 =  $(".con-place4"); 
let con_place5 =  $(".con-place5"); 




$(".warning").hide();



let wrong = "assets/img/per.png";
let right = "assets/img/true.png";


     

$("#password").keyup(function (e) { 
    con.fadeIn(100);
let con_place3 =  $(".con-place3");
   let pas = $(this).val();
if(pas.match(/[0-9]/)){
    con_place2.children("img").attr("src" , right);   
    con_place2.children("span").css("color" , "green");
}else{
    con_place2.children("img").attr("src" , wrong);   
    con_place2.children("span").css("color" , "red");
}

if(pas.match(/[A-Z]/)){
    con_place1.children("img").attr("src" , right);   
    con_place1.children("span").css("color" , "green");
}else{
    con_place1.children("img").attr("src" , wrong);   
    con_place1.children("span").css("color" , "red");
}

if(pas.match(/[a-z]/)){
    con_place3.children("img").attr("src" , right);   
    con_place3.children("span").css("color" , "green");
}else{
    con_place3.children("img").attr("src" , wrong);   
    con_place3.children("span").css("color" , "red");
}
if(pas.length > 5){
    con_place4.children("img").attr("src" , right);   
    con_place4.children("span").css("color" , "green");
}else{
    con_place4.children("img").attr("src" , wrong);   
    con_place4.children("span").css("color" , "red");
}
if(pas.match(/[/@/#/$/%/^/&/*/(/)/</>/./,/?/]/)){
    con_place5.children("img").attr("src" , right);   
    con_place5.children("span").css("color" , "green");
}else{
    con_place5.children("img").attr("src" , wrong);   
    con_place5.children("span").css("color" , "red");
}
});

$(".signin-btn").click(function (e) { 
    e.preventDefault();
     
      let pas = $("#password").val();
      if(!pas.match(/[0-9]/)){
        $(".warning").show(100);
        $(".warning").html("please password must <br> contain number");
      }else if(!pas.match(/[A-Z]/)){
        $(".warning").show(100);
        $(".warning").html("please password must <br> contain uppercase");
      }else if(!pas.match(/[a-z]/)){
        $(".warning").show(100);
        $(".warning").html("please password must <br> contain lowercase");
      }else if(pas.length < 6){
        $(".warning").show(100);
        $(".warning").html("please at least 6 charecter");
      }else if(!pas.match(/[/@/#/$/%/^/&/*/(/)/</>/./,/?/]/)){
        $(".warning").show(100);
        $(".warning").html("please must contain symbol");
      }else{
               let username =  $("#username").val(); 
                let email =  $("#email").val(); 
                let password =  $("#password").val(); 
                let confirm_password =  $("#c-password").val(); 
              
            $.post('requests/signin.php' , {username : username  , password : password , email : email , confirm_password : confirm_password} ,function(response){
                if(response === 'success'){
                    window.location.href = "login.php?warning=success";
                }else{
                    $(".warning").show(100);
                    $(".warning").html(response);
                }
            })
      }
});
