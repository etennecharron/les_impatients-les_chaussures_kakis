/* Wow, tellement un beau spot pour écrire du JS */
console.log("test");







 /*************************DEBUT HUB DE NOUVELLES  (FONCTIONNE UNIQUEMENT QUE SUR HUB DE NOUVELLE)**********************/
if(document.querySelector("body").classList[1] == "page-template-hub_nouvelle"){

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
        for(let i = 0; i<6; i++){
            
            carteContainer = carteContainer + `<div class="card">
            <img src="https://media.newyorker.com/photos/59095bb86552fa0be682d9d0/master/w_1920,c_limit/Monkey-Selfie.jpg" class="card-img-top"
                alt="image de la nouvelle 1">
            <div class="card-body">
                <h4 class="card-title">${data[i].title.rendered}</h4>
                <a href="${data[i].link}">
                <button>En savoir plus</button>
                </a>
            </div>
        </div>`;


        }
console.log(carteContainer);
zoneCarte.innerHTML = carteContainer;
  });
    }


    // Si le menu déroulant est selectionner sur Nouvelles anciennes, fetch dans l'ordre des nouvelles anciennes
    else if(menuDeroulant.value == "anciens"){
        console.log("nouvelles anciens")
        fetch("http://localhost/les_impatients-les_chaussures_kakis/wordpress/wordpress//wp-json/wp/v2/nouvelle?orderby=date&order=asc")
        .then(response => response.json())
        .then(data =>{      
        for(let i = 0; i<6; i++){

            carteContainer = carteContainer + `<div class="card">
            <img src="https://media.newyorker.com/photos/59095bb86552fa0be682d9d0/master/w_1920,c_limit/Monkey-Selfie.jpg" class="card-img-top"
                alt="image de la nouvelle 1">
            <div class="card-body">
                <h4 class="card-title">${data[i].title.rendered}</h4>
                <a href="${data[i].link}">
                <button>En savoir plus</button>
                </a>
            </div>
        </div>`;
        
        }
        
zoneCarte.innerHTML = carteContainer;
  });
        
        
    }

   })




   // FUNCTION POUR QUI FAIS AFFICHER LES NOUVELLES LORSQUE L'UTILISATEUR OUVRE LA PAGE OUVRE POUR LA PREMIERE FOI
  function initialisePageHubNouvelle(){
    carteContainer ="";
    // Si le menu déroulant est selectionner sur Nouvelles récentes, fetch dans l'ordre des nouvelles récentes
    if(menuDeroulant.value == "recent"){
        console.log("nouvelles recentes")
        
        fetch("http://localhost/les_impatients-les_chaussures_kakis/wordpress/wordpress//wp-json/wp/v2/nouvelle?orderby=date&order=desc")
        .then(response => response.json())
        .then(data =>{
        console.log(data);
        for(let i = 0; i<6; i++){
            
            carteContainer = carteContainer + `<div class="card">
            <img src="https://media.newyorker.com/photos/59095bb86552fa0be682d9d0/master/w_1920,c_limit/Monkey-Selfie.jpg" class="card-img-top"
                alt="image de la nouvelle 1">
            <div class="card-body">
                <h4 class="card-title">${data[i].title.rendered}</h4>
                <a href="${data[i].link}">
                <button>En savoir plus</button>
                </a>
            </div>
        </div>`;


        }
console.log(carteContainer);
zoneCarte.innerHTML = carteContainer;
  });
    }


    // Si le menu déroulant est selectionner sur Nouvelles anciennes, fetch dans l'ordre des nouvelles anciennes
    else if(menuDeroulant.value == "anciens"){
        console.log("nouvelles anciens")
        fetch("http://localhost/les_impatients-les_chaussures_kakis/wordpress/wordpress//wp-json/wp/v2/nouvelle?orderby=date&order=asc")
        .then(response => response.json())
        .then(data =>{      
        for(let i = 0; i<6; i++){

            carteContainer = carteContainer + `<div class="card">
            <img src="https://media.newyorker.com/photos/59095bb86552fa0be682d9d0/master/w_1920,c_limit/Monkey-Selfie.jpg" class="card-img-top"
                alt="image de la nouvelle 1">
            <div class="card-body">
                <h4 class="card-title">${data[i].title.rendered}</h4>
                <a href="${data[i].link}">
                <button>En savoir plus</button>
                </a>
            </div>
        </div>`;
        
        }
        
zoneCarte.innerHTML = carteContainer;
  });
    }
  }

  // ACTIVE LA FUNCTION
  initialisePageHubNouvelle();
}


 /*********************************************FIN HUB DE NOUVELLES****************************************/