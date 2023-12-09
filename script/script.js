let alert = document.querySelector(".alert");
alert.querySelector("button").addEventListener("click",function(){
localStorage.setItem("alertEtat","false");
})
if(localStorage.getItem("alertEtat") != null){
console.log("alert désactiver")
alert.classList.add("desactiver")
}


const mySwiperOne = new Swiper ("#hubNouvelles .nouvellesRecentes__wrapup .swiper", {
    direction: 'horizontal',
    loop: true,
    slidesPerView:"1",
    spaceBetween: 30,
    //centeredSlides: true,
    autoplay:true,
    // Navigation arrows
  navigation: {
    nextEl: '.swiperBtnDroit',
    prevEl: '.swiperBtnGauche',
  },
  breackpoints:{
    1200:{
        slidesPerView:3,
    }
  }
    
});


const mySwiperTwo = new Swiper ("#hubNouvelles .nouvellesRecentes .mySwiper", {
  direction: 'horizontal',
  loop: true,
  centerdSlides: true,
  spaceBetween:30,
  addSlidesAfter:2,
  addSlidesBefore:2,
navigation: {
  nextEl: '.swiperBtnDroit',
  prevEl: '.swiperBtnGauche',
},
});
