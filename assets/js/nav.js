
// fonction qui change la loupe en barre
const searchLoop = document.getElementById('searchLoop');
if (searchLoop != null) {
    searchLoop.addEventListener("click", () => {
        const loop = document.getElementById('loop');
        loop.classList.toggle('fa-search');
        loop.classList.toggle('fa-times');
        const formSearch = document.getElementById('form-search');
        formSearch.classList.toggle('show-input-search');
    })

}
// fonction qui change le burger en croix et qui cache les éléments de la nav
const burger = document.getElementById('burger');
if (burger != null) {
    burger.addEventListener("click", () => {
        burger.classList.toggle("change");
        const wrapper = document.getElementById("wrapper");
        const content = document.getElementById("content");
        const links = document.getElementById("links");
        content.classList.toggle("hideNav");
        links.classList.toggle("hideNav");
        wrapper.classList.toggle("fixed");
    })
}
