const burgerButton = document.querySelector(".menu__icon")
const menu = document.querySelector(".menu__items")
const body = document.querySelector(".body")

burgerButton.addEventListener("click", () => {
    burgerButton.classList.toggle("_active")
    menu.classList.toggle("_active")
    body.classList.toggle("_lock")
})
