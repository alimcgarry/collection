const modalWindow = document.querySelector(".modal");
const body = document.querySelector('body');
const title = document.querySelector(".header__title")

function toggleModal(e) {
    e.stopPropagation()
    modalWindow.classList.toggle("hidden");
}

// modalWindow.addEventListener("click", toggleModal);
title.addEventListener("click", toggleModal)
body.addEventListener("click", toggleModal)

