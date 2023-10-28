let alert = document.querySelector(".alert");
alert.querySelector("button").addEventListener("click",function(){
localStorage.setItem("alertEtat","false");
})
if(localStorage.getItem("alertEtat") != null){
console.log("alert désactiver")
alert.classList.add("desactiver")
}