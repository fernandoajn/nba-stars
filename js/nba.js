const $ = document.querySelector.bind(document);

const addButton = $('#btnadd');
const closeButton = $('.modal-toggler');
const modal = $('#addJogador');

addButton.addEventListener("click", () => {
  modal.classList.remove('modal-hide');
  modal.classList.add('modal-show');
});

closeButton.addEventListener("click", () => {
  modal.classList.remove('modal-show');
  modal.classList.add('modal-hide');
})

const toggleModal = () => {
   
}