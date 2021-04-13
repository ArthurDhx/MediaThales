
// fonction qui change la loupe en barre
// et qui affiche la champ d'input
const searchLoop = document.getElementById('searchLoop');
if (searchLoop != null) {
    searchLoop.addEventListener("click", () => {
        // on récupère l'icône loop
        const loop = document.getElementById('loop');

        // on on/off la loupe ou la croix
        loop.classList.toggle('fa-search');
        loop.classList.toggle('fa-times');

        // on récupère le champ d'input
        const formSearch = document.getElementById('form-search');

        // on on/off son affichage
        formSearch.classList.toggle('show-input-search');
    })

}
// fonction qui change le burger en croix et qui cache les éléments de la nav
const burger = document.getElementById('burger');
if (burger != null) {
    burger.addEventListener("click", () => {
        // on on/off le burger en croix
        burger.classList.toggle("change");

        const wrapper = document.getElementById("wrapper");
        const content = document.getElementById("content");
        const links = document.getElementById("links");
        
        // on cache l'affichage normal
        content.classList.toggle("hideNav");
        links.classList.toggle("hideNav");
        wrapper.classList.toggle("fixed");
    })
}
