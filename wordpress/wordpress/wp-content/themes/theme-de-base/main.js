/* Wow, tellement un beau spot pour écrire du JS */
console.log("test");



// selection du menus déroulant
let menuDeroulant = document.querySelector(".menuDeroulantOrdre");

let zoneCarte = document.querySelector(".hubNouvelles__wrapup__cardWrapup");
let carteContainer;


// addeventlistener qui s'active lorsque le menu deroulant de modifie
   menuDeroulant.addEventListener("change",function(){

    carteContainer ="";

    // Si le menu déroulant est selectionner sur Nouvelles récentes, fetch dans l'ordre des nouvelles récentes
    if(menuDeroulant.value == "recent"){
        console.log("nouvelles recentes")
        
        fetch("http://localhost/les_impatients-les_chaussures_kakis/wordpress/wordpress//wp-json/wp/v2/nouvelle?orderby=date&order=desc")
        .then(response => response.json())
        .then(data =>{
        console.log(data);
        for(let i = 0; i<=6; i++){

            if(carteContainer == ""){
                    

            carteContainer = `<div class="card">
            <img src="assets/images/img_carte_nouvelles_01.png" class="card-img-top"
                alt="image de la nouvelle 1">
            <div class="card-body">
                <h4 class="card-title">360 000 $ POUR LA 24E ÉDITION</h4>
                <button>En savoir plus</button>
            </div>
        </div>`

            }


        }

  });
    }


    // Si le menu déroulant est selectionner sur Nouvelles anciennes, fetch dans l'ordre des nouvelles anciennes
    else if(menuDeroulant.value == "anciens"){
        console.log("nouvelles anciens")

        fetch("http://localhost/les_impatients-les_chaussures_kakis/wordpress/wordpress//wp-json/wp/v2/nouvelle?orderby=date&order=asc")
        .then(response => response.json())
        .then(data =>{
        console.log(data);

  });
        

        
    }

   })

  