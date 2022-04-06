const modalWindow = document.querySelector(".modal")
const addDeckBtn = document.querySelector(".header__btn")

const title = document.querySelector(".header__title")

function toggleModal(e) {
    if (modalWindow.classList.contains('hidden')) {
        modalWindow.classList.remove("hidden")
    } else {
        if (!e.target.closest('.modal__content')) {
            modalWindow.classList.toggle("hidden")
        }
    }
}

title.addEventListener("click", toggleModal)
addDeckBtn.addEventListener("click", toggleModal)
modalWindow.addEventListener('click', toggleModal)