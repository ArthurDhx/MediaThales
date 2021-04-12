
// fonction qui change la loupe en barre
const showSearch = document.getElementById('show-search');
if (showSearch != null) {
    showSearch.addEventListener("click", () => {
        const searchLoop = document.getElementById('searchLoop');
        searchLoop.classList.toggle('fa-search');
        searchLoop.classList.toggle('fa-times');
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
