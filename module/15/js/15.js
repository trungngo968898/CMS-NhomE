window.onload = function() {
  //Variables
  var modal = document.querySelector(".modals");
  var modalBtn = document.querySelector(".play-circle-modal");
  var modalCloseBtn = document.querySelector(".modal__close");

  function openModal(e) {
    e.preventDefault();
    modal.classList.add("is-open");
  }

  function closeModal(e) {
    modal.classList.remove("is-open");
  }

  modalCloseBtn.addEventListener("click", closeModal);
  modalBtn.addEventListener("click", openModal);
};
