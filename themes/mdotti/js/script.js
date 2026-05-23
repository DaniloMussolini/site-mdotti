// menu mobile
const btnMenu = document.getElementById('js-btn-menu-mobile');
const overlayMenu = document.querySelector('.overlay');

function openMenuMobile(){
    document.documentElement.classList.toggle('menu-opened');
}
function closeMenuMobile(){
    document.documentElement.classList.remove('menu-opened');
}

btnMenu.addEventListener("click", openMenuMobile);
overlayMenu.addEventListener("click", openMenuMobile);

// modal
const btnOpenModal = document.querySelectorAll('.js-open-modal');
const btnCloseModal = document.querySelectorAll('.js-close-modal');
const modal = document.querySelector('.modal');

// Adiciona evento para abrir o modal
btnOpenModal.forEach((item) => {
  item.addEventListener('click', (event) => {
    event.preventDefault();
    modal.classList.add('active');
  });
});

// Adiciona evento para fechar o modal
btnCloseModal.forEach((item) => {
  item.addEventListener('click', (event) => {
    event.preventDefault();
    modal.classList.remove('active');
  });
});

// Accordion
const accordion = document.querySelectorAll('.js-accordion');

accordion.forEach(acc =>{
    acc.addEventListener('click', () =>{
        // adiciona a classe no elemento pai de js-accordion
        let pai = acc.parentElement;
        pai.classList.toggle('active');
    })
})

