<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="styles/style.min.css">
    
</head>
<body>
    <header class="header">
        <div class="header__row-bg-fixed">
        <div class="header__row container">
            <a href="" class="header__logo-link">
                <img src="/images/logo.png" alt="" class="header__logo-image">
            </a>
            <nav class="menu">
                <button class="menu__button"></button>
                <ul class="menu__list">
                    <a href="" class="header__logo-link">
                        <img src="/images/logo.png" alt="" class="header__logo-image">
                    </a>
                    <li class="menu__item">
                        <a href="#pizza" class="menu__link">Пиццы</a>
                    </li>
                    <li class="menu__item">
                        <a href="#spec-pizza" class="menu__link">Спецпиццы</a>
                    </li>
                    <li class="menu__item">
                        <a href="#hachapuri" class="menu__link">Хачапури</a>
                    </li>
                    <li class="menu__item">
                        <a href="#kalcone" class="menu__link">Кальцоне</a>
                    </li>
                    <li class="menu__item">
                        <a href="#chebureki" class="menu__link">Чебуреки</a>
                    </li>
                    <li class="menu__item">
                        <a href="#deserti" class="menu__link">Десерты</a>
                    </li>
                    <li class="menu__item">
                        <a href="#napitki" class="menu__link">Напитки</a>
                    </li>
                </ul>
            </nav>
            <p class="header__contacts"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22" height="22" viewBox="0 0 22 22">
                <image id="phone-call" width="22" height="22" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAABkElEQVQ4jZ3Uz4tOURzH8ddIJDViMcyKhZRfGz8axUIzxNJGWdha2NhMsrBQivwJErtZsGbDjJnNNGEhKZYGRUPJj1GkJvpyrp7OmXvv8zzvzb33+/med/eee84ZWDi0Rwd7cQE/cAmv9cnKjmEHcRfr0/NxjOJFP+oV6boP0x3SYCjVthajuhQP4x5WFek/+WNsL5IWQnwAGxvaNuAO1hZJAyFeXR//ZwfWFNUGQvwBv+pb/jKL70W1gRC/xNealiVcxAn8LNIGqjeeq2m5gqv4UiQtVMvt3DJtv/GmqPYofotbWTaAo+natzi4jIUsP4WdxagexfHW54sOHmQ7MmcdRjBYJw4mcD2rDSf5UKFkE57hEZ5jW504GMdkVouz5CkOZ3N+DVvS/ea0/WMzyY/NithlT7Arq8e6nsJMOmJPFiN5jyN1Ymle72N/kbTzbbmpqPiMMTwsknYGm8TBIo6lH7pUpA20iYMQnsXp9BXd8LEbccVt7MbNlr75OON7EQfvcAbxx2/gU5a/ihWB+T/QQkL5i6WdbQAAAABJRU5ErkJggg=="/>
              </svg>
              <a href="tel:+79216320626">+7 (921) 632 0 626</a></p>
        </div>
    </div>
        <div class="baner-text container">
            <p class="baner-text__title">Меню доставки</p>
            <p class="baner-text__description">Мы будем расширять ассортимент блюд нашего кафе. <br>   
                В настоящее время вы можете заказать на дом следующие позиции из нашего меню*.</p>
        </div>
    </header>
    <main>
        <section class="catalog container">
            <h2 class="catalog__products-title" id="pizza">Пиццы</h2>
            <ul class="catalog__list">
                <li class="catalog__item" data-id="1">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Палермо</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                <li class="catalog__item" data-id="2">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Маргарита</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                <li class="catalog__item" data-id="3">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Палермо</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                <li class="catalog__item" data-id="4">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Палермо</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                
            </ul>
            <h2 class="catalog__products-title" id="spec-pizza">Спецпиццы</h2>
            <ul class="catalog__list">
                <li class="catalog__item" data-id="1">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Палермо</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                <li class="catalog__item" data-id="2">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Маргарита</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                <li class="catalog__item" data-id="3">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Палермо</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                <li class="catalog__item" data-id="4">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Палермо</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                
            </ul>
            <h2 class="catalog__products-title" id="hachapuri">Хачапури</h2>
            <ul class="catalog__list">
                <li class="catalog__item" data-id="1">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Палермо</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                <li class="catalog__item" data-id="2">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Маргарита</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                <li class="catalog__item" data-id="3">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Палермо</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                <li class="catalog__item" data-id="4">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Палермо</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                
            </ul>
            <h2 class="catalog__products-title" id="kalcone">Кальцоне</h2>
            <ul class="catalog__list">
                <li class="catalog__item" data-id="1">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Палермо</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                <li class="catalog__item" data-id="2">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Маргарита</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                <li class="catalog__item" data-id="3">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Палермо</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                <li class="catalog__item" data-id="4">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Палермо</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                
            </ul>
            <h2 class="catalog__products-title" id="chebureki">Чебуреки</h2>
            <ul class="catalog__list">
                <li class="catalog__item" data-id="1">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Палермо</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                <li class="catalog__item" data-id="2">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Маргарита</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                <li class="catalog__item" data-id="3">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Палермо</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                <li class="catalog__item" data-id="4">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Палермо</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                
            </ul>
            <h2 class="catalog__products-title" id="deserti">Десерты</h2>
            <ul class="catalog__list">
                <li class="catalog__item" data-id="1">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Палермо</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                <li class="catalog__item" data-id="2">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Маргарита</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                <li class="catalog__item" data-id="3">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Палермо</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                <li class="catalog__item" data-id="4">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Палермо</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>       
            </ul>
            <h2 class="catalog__products-title" id="napitki">Напитки</h2>
            <ul class="catalog__list">
                <li class="catalog__item" data-id="1">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Палермо</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                <li class="catalog__item" data-id="2">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Маргарита</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                <li class="catalog__item" data-id="3">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Палермо</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                <li class="catalog__item" data-id="4">
                    <img src="/images/margarita.png" alt="" class="catalog__item-img">
                    <div class="catalog__item-text">
                        <h4 class="catalog__item-name item_title">Палермо</h4>
                        <p class="catalog__item-description">Пицца Феличита на
                            белом (сливочном)
                            соусе </p>
                        <p class="catalog__item-price item_price">500<span class="catalog-item-currency">руб.</span></p>
                    </div>
<div class="catalog__item-btns-size">
                        <button class="catalog__item-btn catalog__item-btn--active" data-price="500">28</button>
                        <button class="catalog__item-btn" data-price="700">30</button>
                    </div>
                    <button class="catalog__item-submit add_item"> В корзину</button>
                </li>
                
            </ul>
        </section>
        <section class="text">
            <div class="text__content container">
                <h2>
                    Друзья, в марте 2020 мы запустили нашу доставку!
                </h2>
                <h3>
                    Все наши пиццы диаметром 30 см. на тонком тесте, каждая весом не менее 600гр.
                    Пиццы сделаны вручную в нашей помпейской печи.
                </h3>
                <p>
                    <p>Работаем в тестовом режиме 1-й этап развития зоны доставки: <br>
                    1-й этап развития зоны доставки: Малое Верево, Гатчина. Мы сейчас здесь :).</p>
                    <p>2-й этап: Тайцы, Коммунар, Романовка, Большое Верево. О расширении зоны доставки сообщим дополнительно.</p>
                    <p>Как вы понимаете, доставка работает в тестовом режиме. <br>
                        Мы очень стараемся делать все быстро и качественно, но вероятно могут быть накладки (это жизнь). <br>
                        Просим вас с пониманием отнестись к подобным ситуациям.</p>
                </p>
            </div>
        </section>
        <section class="stages container">
            <h3 class="stages__title">Как мы работаем</h3>
            <ul class="stages__list">
                <li class="stages__item">
                    <h5 class="stages__name">Оформите заказ</h5>
                    <p class="stages__description">Сделайте заказ на нашем
                        сайте или по телефону.
                        Оплата на сайте или курьеру.</p>
                </li>
                <li class="stages__item">
                    <h5 class="stages__name">Подтверждение</h5>
                    <p class="stages__description">Дождитесь звонка менеджера для
                        подтверждения заказа и уточнения
                        деталей.</p>
                </li>
                <li class="stages__item">
                    <h5 class="stages__name">Доставка</h5>
                    <p class="stages__description">В тестовом режиме осуществляем
                        в течение часа. Малое и Большое
                        Верево. Гатчина.</p>
                </li>
                <li class="stages__item">
                    <h5 class="stages__name">Отзыв</h5>
                    <p class="stages__description">После получения заказа напишите
                        нам свой отзыв (о нашей еде и
                        качестве доставки).</p>
                </li>
            </ul>
        </section>
        <section class="map">
            <div class="form-block">
                <h4 class="form-block__title">Напишите нам!</h4>
                <p class="form-block__contacts">
                    <span class="bold">Телефон:</span> +7 (921) 632 0 626 <br>
                    <span class="bold">Адрес:</span> Ленинградская область, Гатчинский район, Киевское шоссе 2Г <br>
                    <span class="bold">E-mail:</span> pizza@finger-food.ru
                </p>
                <form action="/mail.php" method="POST" id="form-footer">
                    <input type="text" name="name" placeholder="Имя" required> <br>
                    <input type="email" name="email" placeholder="E-mail"  required> <br>
                    <input type="tel" name="phone" placeholder="Телефон"  required><br>
                    <textarea name="message" cols="30" rows="3" placeholder="Ваше сообщение" ></textarea><br>
                    <button type="submit" name="submit-form" class="submit-btn">Отправить</button>
                </form>
            </div>
        </section>
    </main>
    <footer class="main-footer">
        <div class="footer__row container">
            <a href="" class="header__logo-link">
                <img src="/images/footerLogo.png" alt="" class="header__logo-image">
            </a>
            <nav class="menu">
                
                <ul class="menu__list">
                    <li class="menu__item">
                        <a href="#pizza" class="menu__link">Пиццы</a>
                    </li>
                    <li class="menu__item">
                        <a href="#spec-pizza" class="menu__link">Спецпиццы</a>
                    </li>
                    <li class="menu__item">
                        <a href="#hachapuri" class="menu__link">Хачапури</a>
                    </li>
                    <li class="menu__item">
                        <a href="#kalcone" class="menu__link">Кальцоне</a>
                    </li>
                    <li class="menu__item">
                        <a href="#chebureki" class="menu__link">Чебуреки</a>
                    </li>
                    <li class="menu__item">
                        <a href="#deserti" class="menu__link">Десерты</a>
                    </li>
                    <li class="menu__item">
                        <a href="#napitki" class="menu__link">Напитки</a>
                    </li>
                </ul>
            </nav>
            <div class="footer__contacts">
                <a href="mailto:pizza@finger-food.ru">pizza@finger-food.ru</a>
                <a href="tel:+79216320626">+7 (921) 632 0 626</a>
                <p class="footer__contacts-description">
                    Принимаем заказы <br>
                    Пятница, Суббота с 11 до 21.45 <br>
                    Остальные дни с 11.00 до 20.45 <br>
                    Внимание! Следите за нашими акциями!!!
                </p>
            </div>
        </div>
    </footer>
    <script src="js/js.js"></script>
</body>
</html>