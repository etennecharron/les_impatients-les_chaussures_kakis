/* Wow, tellement un beau spot pour écrire du JS */
console.log("Main.js fonctionne");

// gsap.registerPlugin(ScrollTrigger);

/* Animation 404 */
/**gsap
  .timeline()
  .from(".drawanim", { x:"400%" },1)
  .from(".h2_page_draw", { x:"400%" })
  .from(".info_draw", { x:"400%"} )
  .from(".use_loupe_draw", { x:"400%"} )
  .from(".signaler_draw", { x:"400%"} )
  .from(".search_draw", { x:"400%"} );
**/
/* Fin Animation 404 */

/* Animation Histoire */

/**gsap.to('.histoire__1992', 
          
{ 
opacity:1,
scrollTrigger:
 
{
  trigger: '.histoire__1992',
  
  scrub: 0.5,
   start: 'top 70%',
   end: 'bottom 25%',
   }, 
}


         
);

gsap.to('.histoire__1999', 
          
{ 
opacity:1,
scrollTrigger:
 
{
  trigger: '.histoire__1999',
  
  scrub: 0.5,
   start: 'top 70%',
   end: 'bottom 25%',
   }, 
}


         
);

gsap.to('.histoire__2009', 
          
{ 
opacity:1,
scrollTrigger:
 
{
  trigger: '.histoire__2009',
  
  scrub: 0.5,
   start: 'top 70%',
   end: 'bottom 25%',
   }, 
}


         
);

gsap.to('.histoire__2011', 
          
{ 
opacity:1,
scrollTrigger:
 
{
  trigger: '.histoire__2011',
  
  scrub: 0.5,
   start: 'top 70%',
   end: 'bottom 25%',
   }, 
}


         
);
 **/
/* Fin Animation Histoire */

let btnPlusDeNouvelles = document.querySelector(".btnPlusNouvelle");

/*************************DEBUT HUB DE NOUVELLES  (FONCTIONNE UNIQUEMENT QUE SUR HUB DE NOUVELLE)**********************/
if (document.querySelector("body").classList[1] == "page-template-hub_nouvelle") {



    // selection du menus déroulant
    let menuDeroulant = document.querySelector(".menuDeroulantOrdre");
    let zoneCarte = document.querySelector(".hubNouvelles__wrapup__cardWrapup");
    let carteContainer;
    let nbDeCartePresente = 0;

    // addeventlistener qui s'active lorsque le menu deroulant de modifie
    menuDeroulant.addEventListener("change", function () {
        carteContainer = "";
        nbDeCartePresente = 0;

        for(let i = 0; i<btnPlusDeNouvelles.classList.length;i++){
            if(btnPlusDeNouvelles.classList[i] == "desactiver"){
                btnPlusDeNouvelles.classList.remove(btnPlusDeNouvelles.classList[i]);
            }
        }

        // Si le menu déroulant est selectionner sur Nouvelles récentes, fetch dans l'ordre des nouvelles récentes
        if (menuDeroulant.value == "recent") {
            fetch("http://localhost/les_impatients-les_chaussures_kakis/wordpress/wordpress//wp-json/wp/v2/nouvelle?orderby=date&order=desc")
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    for (let i = nbDeCartePresente; i < 6; i++) {

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

                        nbDeCartePresente++;

                    }
                    zoneCarte.innerHTML = carteContainer;
                });
        }


        // Si le menu déroulant est selectionner sur Nouvelles anciennes, fetch dans l'ordre des nouvelles anciennes
        else if (menuDeroulant.value == "anciens") {
            fetch("http://localhost/les_impatients-les_chaussures_kakis/wordpress/wordpress//wp-json/wp/v2/nouvelle?orderby=date&order=asc")
                .then(response => response.json())
                .then(data => {
                    for (let i = nbDeCartePresente; i < 6; i++) {

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
                        nbDeCartePresente++;
                    }

                    zoneCarte.innerHTML = carteContainer;
                });


        }

    })




    // FUNCTION POUR QUI FAIS AFFICHER LES NOUVELLES LORSQUE L'UTILISATEUR OUVRE LA PAGE OUVRE POUR LA PREMIERE FOI
    /********************************Début function initialisation***************************/
    function initialisePageHubNouvelle() {
        carteContainer = "";
        // Si le menu déroulant est selectionner sur Nouvelles récentes, fetch dans l'ordre des nouvelles récentes
        if (menuDeroulant.value == "recent") {
            fetch("http://localhost/les_impatients-les_chaussures_kakis/wordpress/wordpress//wp-json/wp/v2/nouvelle?orderby=date&order=desc")
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    for (let i = nbDeCartePresente; i < 6; i++) {
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

                        nbDeCartePresente++;
                    }
                    zoneCarte.innerHTML = carteContainer;
                });
        }


        // Si le menu déroulant est selectionner sur Nouvelles anciennes, fetch dans l'ordre des nouvelles anciennes
        else if (menuDeroulant.value == "anciens") {
            fetch("http://localhost/les_impatients-les_chaussures_kakis/wordpress/wordpress//wp-json/wp/v2/nouvelle?orderby=date&order=asc")
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    for (let i = nbDeCartePresente; i < 6; i++) {

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

                        nbDeCartePresente++;

                    }

                    zoneCarte.innerHTML = carteContainer;
                });
        }
    }

    /********************************Fin function initialisation***************************/




    /**********************************début btn qui rajoute des nouvelles*************************************/
    btnPlusDeNouvelles.addEventListener("click", function () {

        let nbMaxDeCarte = nbDeCartePresente;

        // Si le menu déroulant est selectionner sur Nouvelles récentes, fetch dans l'ordre des nouvelles récentes
        if (menuDeroulant.value == "recent") {
            fetch("http://localhost/les_impatients-les_chaussures_kakis/wordpress/wordpress//wp-json/wp/v2/nouvelle?orderby=date&order=desc")
                .then(response => response.json())
                .then(data => {




  // Si il reste plus de 6 nouvelles, affiche 6 nouvelles
  if (data.length - 6 > nbDeCartePresente) {
    for (let i = nbDeCartePresente; i < 6; i++) {

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
        nbDeCartePresente++;
    }
}
// Si il reste moins de 6 nouvelles, calcul le nombre de nouvelles restantes et les affiches
else {
    for (let i = nbDeCartePresente; i < data.length; i++) {
        nbMaxDeCarte++;
    };
    for (let i = nbDeCartePresente; i < nbMaxDeCarte; i++) {
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
        nbDeCartePresente++;


    }
    // rajoute un style sur le bouton qui fais disparaitre le bouton
    btnPlusDeNouvelles.classList.add("desactiver");
}



zoneCarte.innerHTML = carteContainer;




                });
        }


        // Si le menu déroulant est selectionner sur Nouvelles anciennes, fetch dans l'ordre des nouvelles anciennes
        else if (menuDeroulant.value == "anciens") {
            fetch("http://localhost/les_impatients-les_chaussures_kakis/wordpress/wordpress//wp-json/wp/v2/nouvelle?orderby=date&order=asc")
                .then(response => response.json())
                .then(data => {

                // Si il reste plus de 6 nouvelles, affiche 6 nouvelles
                    if (data.length - 6 > nbDeCartePresente) {
                        for (let i = nbDeCartePresente; i < 6; i++) {

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
                            nbDeCartePresente++;
                        }
                    }
                    // Si il reste moins de 6 nouvelles, calcul le nombre de nouvelles restantes et les affiches
                    else {
                        for (let i = nbDeCartePresente; i < data.length; i++) {
                            nbMaxDeCarte++;
                        };
                        for (let i = nbDeCartePresente; i < nbMaxDeCarte; i++) {
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
                            nbDeCartePresente++;


                        }
                        // rajoute un style sur le bouton qui fais disparaitre le bouton
                        btnPlusDeNouvelles.classList.add("desactiver");
                    }



                    zoneCarte.innerHTML = carteContainer;

                });
        }
    })
    /***************************************Fin btn qui rajoute des nouvelles*********************************/






    // fais apparaitre les nouvelles lors du chargement de la page
    initialisePageHubNouvelle();
}

/*********************************************FIN HUB DE NOUVELLES****************************************/