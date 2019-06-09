let elImg = document.querySelectorAll(".products-content__section__img img");
let modalImage = document.querySelector(".modal-body__image img");

elImg.forEach(element => {
    console.log(element.src);
    element.addEventListener('click', ()=> {
        element.setAttribute("data-toggle", "modal");
        element.setAttribute("data-target", "#imageModal");
        modalImage.src = element.src;
    })
});