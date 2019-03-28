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

(function() {
  let clickables = document.querySelectorAll('.clickable');
  clickables.forEach(function(element){
    element.addEventListener("click", function() {
      window.location = this.getAttribute('data-href');
    });
  });
})();