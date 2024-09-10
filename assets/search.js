$(".search-btn").click(function (e) { 
    e.preventDefault();
     const place = $(".card-place");
     let city = $("#city option:selected").text();
     let type = $("#type option:selected").text();
     let room = $("#room option:selected").text();
     let loading = '<dotlottie-player src="https://lottie.host/ff8dd525-a27f-4425-a1d3-5f1870d78cb1/Vx9wR3G775.json" background="transparent"  speed="1" style="width: 300px; height: 300px" direction="1" playMode="normal" loop  autoplay></dotlottie-player>';
     let notfound = '<dotlottie-player src="https://lottie.host/7401522f-2d8b-4049-ad18-eb0edb6af224/CE9lFrNlEH.json" background="transparent"  speed="1" style="width: 300px; height: 300px" direction="1" playMode="normal" loop  autoplay></dotlottie-player>';
     $.post("requests/search-house.php"  , {city : city , type:type , room : room} ,  function(response){
        let couneter = 0;
        place.html(loading);
        if(response != "fail"){
            setInterval(function(){
                couneter++;
                 if(couneter === 2){
                      place.html(response);
                 }
            } , 1000)
        }

     })

  });