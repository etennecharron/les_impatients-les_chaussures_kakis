let alert = document.querySelector(".alert");
alert.querySelector("button").addEventListener("click",function(){
localStorage.setItem("alertEtat","false");
})
if(localStorage.getItem("alertEtat") != null){
console.log("alert désactiver")
alert.classList.add("desactiver")
}




/**
const mySwiperTwo = new Swiper ("#hubNouvelles .nouvellesRecentes .swiper-container", {
  direction: 'horizontal',
  centerdSlides: true,
  loop:true,
  spaceBetween:30,
  addSlidesAfter:0,
  addSlidesBefore:0,
navigation: {
  nextEl: '.swiperBtnDroit',
  prevEl: '.swiperBtnGauche',
},
});
 */