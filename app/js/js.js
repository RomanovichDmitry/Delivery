'use strict'
let headerRow = document.querySelector('.header__row');
let header = document.querySelector('.header');
let headerBg = document.querySelector('.header__row-bg-fixed');
let menuBtn = document.querySelector('.menu__button');
let btnSize = document.querySelectorAll('.catalog__item-btn');
let items = document.querySelectorAll('.catalog__item');
let cartCont = document.getElementById('crate__content');

//Кнопка меню

menuBtn.onclick = () => {
    menuBtn.classList.toggle('menu__button--active');
}
// Фиксация меню при скроле
let fixHeaderRow = () => {
    if(window.scrollY > 20){
        headerBg.classList.add('fixed-header')
        header.style.paddingTop="210px"
        headerBg.style.background="#393939";
        headerBg.style.height="89px";
        if (document.documentElement.clientWidth < 1300) {
            headerBg.style.height="65px";
            header.style.paddingTop="180px"}
        if (document.documentElement.clientWidth < 768) {
            headerBg.style.height="55px";
        }
    } else {
        headerBg.classList.remove('fixed-header')
        header.style.paddingTop="20px"
        headerBg.style.background="none";
        headerBg.style.height="inherit";
    }

};
window.addEventListener('scroll', fixHeaderRow)

// Переключатель размера пиццы
items.forEach((item) => {
    item.addEventListener('click', clickOnCard) //Цикл клика по каждой карточке товара
});

function clickOnCard(evt) {
    let target = evt.target; //Отлавливаю элемент по которому был выполнен клик 
    if (target.classList.contains("catalog__item-btn")) { //Если это элемент с классом
        let checkboxes = this.querySelectorAll(".catalog__item-btn"); //Нахожу все кнопки
        for(let checkbox of checkboxes) {
            checkbox.classList.remove("catalog__item-btn--active") //Удаляю класс активности с каждой кнопки в карточке
        }
        // checkboxes.forEach((checkbox) => checkbox.classList.remove("catalog__item-btn--active"));

        target.classList.add("catalog__item-btn--active"); //Добавить класс активности кнопке на карточке на которую был клик
        let btn = this.querySelector(".catalog__item-submit"); //Нахожу кнопку отправки
        btn.dataset.size = target.textContent //Создааю в кнопке атрибут и присваиваю ей значение содержимого в кнопке
        let activBtn = this.querySelector('.catalog__item-btn--active');
        btn.dataset.price = activBtn.dataset.price
        let price = this.querySelector(".catalog__item-price");
            price.textContent = btn.dataset.price + 'руб.'
    }
}

//Корзина 