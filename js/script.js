const menu = document.querySelector('.mobile__menu');
const menuToggle = document.querySelector('.mobile-toggle');

const openMenu = (event) => {  //функция открытия меню
  menu.classList.add("is-open"); //вешает класс is-open
  menuToggle.classList.add("close-menu");
  document.body.style.overflow="hidden"; //запрещаем прокрутку сайта под меню
};
const closeMenu = (event) => {  //функция закрытия меню
  menu.classList.remove("is-open"); //убирает класс is-open
  menuToggle.classList.remove("close-menu");
  document.body.style.overflow=""; //разрешает прокрутку сайта под меню
  // this.scrollY > 1 ? lightModeOn() : lightModeOff();
  // if (isInter) {
  //   this.scrollY > 1 ? lightModeOn() : lightModeOn();
  // }
};
menuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});


let currentModal; //текуще модальное окно
let modalDialog;  //белое диалоговое окно
let alertModal = document.querySelector("#alert-modal");  //окно с предупреждением(если есть)
let modalClose;
const body = document.querySelector("body");


const modalButtons = document.querySelectorAll("[data-toggle=modal]");  //переключатели(кнопки) модальных окон
modalButtons.forEach((button) => {
  //клик по переключателю
  button.addEventListener("click", (event) => {
    event.preventDefault();
    //определяем текущее открытое окно
    currentModal = document.querySelector(button.dataset.target);
    //открываем текущее окно
    currentModal.classList.toggle("modal__open");

    body.classList.toggle("lock");
    //назначаем диалоговое окно
    modalDialog = currentModal.querySelector(".modal__dialog");
    //отслеживаем клик по окну и пустым областям
    currentModal.addEventListener("click", event => {
      //если клик в пустую область ...
      if (!event.composedPath().includes(modalDialog)) {
        //... то закрываем окно
        currentModal.classList.remove("modal__open");
        body.classList.remove("lock");
      }
    });
  });
}); 
//ловим событие клика по кнопке
document.addEventListener("keyup", (event) => {
    //проверяем что это Escape и текущее окно открыто 
    if (event.key == "Escape" && currentModal.classList.contains ("modal__open")) {
      //закрываем текущее окно
      currentModal.classList.toggle("modal__open");
      //разрешаем прокрутку страницы
      body.classList.remove("lock");
    }
  });











// const modal = document.querySelector(".modal");
// const modalDialog = document.querySelector(".modal__dialog");

// document.addEventListener("click", (event) => {

//   if (
//     event.target.dataset.toggle == "modal" || 
//     event.target.parentNode.tataset.toogle == "modal" ||
//     (!event.composedPath().includes(modalDialog) && 
//     modal.classList.contains("modal__open"))
//   ) {
//     event.preventDefault();
//     modal.classList.toggle("modal__open");
//   }
// });
// document.addEventListener("keyup", (event) =>{
//   if (event.key == "Escape" && modal.classList.contains("modal__open")) {
//     modal.classList.toggle("modal__open");
//   }
// });

// const modalToggle = document.querySelectorAll("[data-toggle=modal]");
// const modalClose =document.querySelector(".modal__close");
// console.log(modalToggle);
// modalToggle.forEach((element) => {
//   element.addEventListener("click", (event) =>{
//     event.preventDefault();
//     modal.classList.add("modal__open");
//   });
// });
// modalClose.addEventListener("click", (event) => {
//   event.preventDefault();
//   modal.classList.remove("modal__open");
// });



