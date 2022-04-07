const modalWindow = document.querySelector(".modal");
const addDeckBtn = document.querySelector(".header__btn");
const errorMessage = document.querySelector(".errors");
const addErrorBtn = document.querySelector(".btn--add");


function toggleModal(e) {
    if (modalWindow.classList.contains('hidden')) {
        modalWindow.classList.remove("hidden");
    } else {
        if (!e.target.closest('.modal__content')) {
            modalWindow.classList.toggle("hidden");
        }
    }
}

function manageError() {
    errorMessage.innerHTML = '';
    toggleModal();
}

addDeckBtn.addEventListener("click", toggleModal);
modalWindow.addEventListener('click', toggleModal);
addErrorBtn.addEventListener('click', function() {
    manageError();
    toggleModal();
})


