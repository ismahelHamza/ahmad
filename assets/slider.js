const slider = document.querySelector(".slider");
const year = document.querySelector(".year");
const btnss = document.querySelectorAll(".btnss");
let counter = 0;
btnss.forEach(function(item){item.addEventListener("click" , function(){
   
    if(item.classList.contains("lefts")){
        counter++;
        if(counter == 1) counter = -1;
        console.log(counter);
        slider.style.transform = `translateX(${ 405 * counter}px)`
    }else{
        counter--;
        if(counter == -2) counter = 0;
        console.log(counter);
        slider.style.transform = `translateX(${405 * counter}px)`
    }
})})

let date = new Date();
year.innerHTML = date.getFullYear();

const images = document.querySelectorAll(".images");
const imageModal = document.querySelector(".show-image");
const imagePlace = document.querySelector(".image-place");

images.forEach(function(item){item.addEventListener("click" , function(){
let imageURL = this.src;
imagePlace.src = imageURL;
imageModal.style.left = "0px";
})})
const close = document.querySelectorAll(".close");

close.forEach(function(item){item.addEventListener("click" , function(){
    imageModal.style.left = "-200%";
})})