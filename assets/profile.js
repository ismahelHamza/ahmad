$(document).ready(function () {
    const container = $(".profile-place");
    const counts_place = $(".counts-place");
    const left_btn = $(".left-btn");
    const right_btn = $(".right-btn");
    const image_place = $(".slider-img");

    setInterval(function(){
      
      $.post('requests/profile.php' , function(response){
        container.html(response);
      })
      $.post('requests/counts.php' , function(response){
        counts_place.text(response);
      })
      var postId = Number($(".hurd").attr("data-id"));
      var liker = Number($(".hurd").attr("data-liker"));
      var owner = Number($(".hurd").attr("data-owner"));


      $.post('requests/house.php' , {postId : postId , liker : liker}  ,function(response){

        $(".card-place").html(response);
        


       

        $(".hurd").click(function (e) { 
          e.preventDefault();
          var postid = Number($(this).attr("data-id"));
          var liker = Number($(this).attr("data-liker"));
          var owner = Number($(this).attr("data-owner"));
       
       $.post('requests/like.php' , {postid : postid , liker : liker , owner : owner} , function(res){
        
       })
        

         });

      })
    } , 500);
      
 

  
    $.post('requests/slider.php' , function(response){
      let imageURL = [];
      let array = JSON.parse(response);
      let arr = array.data;
      for(let i = 0 ; i < arr.length ; i++){
           for(let i = 0 ; i < arr.length ; i++){
                 imageURL[i] = arr[i];
           }
      }
         let counter = -1 , result;
      $(left_btn).click(function (e) { 
        e.preventDefault();
        counter--;
        if(counter < 0){
          counter = imageURL.length - 1;
        }
        result = "assets/img/"+imageURL[counter];
          image_place.attr("src" , result);
      });
      $(right_btn).click(function (e) { 
        e.preventDefault();
        counter++;
        if(counter > imageURL.length - 1){
          counter = 0;
        }
        result = "assets/img/"+imageURL[counter];
          image_place.attr("src" , result);
      });
      
       
     })
     
});