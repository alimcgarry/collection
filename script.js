const modalWindow = document.querySelector(".modal")

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

modalWindow.addEventListener('click', toggleModal)