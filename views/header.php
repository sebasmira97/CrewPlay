<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/styles/header.css">

    <title>¡Propi3dad! Encuentra la casa que siempre soñaste</title>
</head>
<body>
    <nav>
        <img src="<?php echo constant('URL'); ?>public/icons/icon_menu.svg" alt="menu" class="menu">

        <div class="navbar-left">
        <img src="<?php echo constant('URL'); ?>public/logos/logo_propi3dad.svg" alt="logo" class="logo">

        <ul>
            <li>
            <a href="<?php echo constant('URL'); ?>home">Home</a>
            </li>
            <li>
            <a href="<?php echo constant('URL'); ?>propiedades">Propiedades</a>
            </li>
            <li>
            <a href="<?php echo constant('URL'); ?>consulta">Consulta</a>
            </li>
            <li>
            <a href="<?php echo constant('URL'); ?>registrarUsuario">Registrar</a>
            </li>
        </ul>
        </div>

        <div class="navbar-right">
        <ul>
            <li class="navbar-email">propi3dad@example.com</li>
            </li>
        </ul>
        </div>

        <div class="desktop-menu inactive">
            <ul>
            <li>
                <a href="<?php echo constant('URL'); ?>login" class="title">Login</a>
            </li>
        
            <li>
                <a href="<?php echo constant('URL'); ?>registrarUsuario">Registrar Usuario</a>
            </li>
        
            <li>
                <a href="/">Sign out</a>
            </li>
            </ul>
        </div>

        <div class="mobile-menu inactive">
            <ul>
              <li>
                <a href="/">CATEGORIES</a>
              </li>
              <li>
                <a href="/">All</a>
              </li>
              <li>
                <a href="/">Clothes</a>
              </li>
              <li>
                <a href="/">Electronics</a>
              </li>
              <li>
                <a href="/">Furnitures</a>
              </li>
              <li>
                <a href="/">Toys</a>
              </li>
              <li>
                <a href="/">Other</a>
              </li>
            </ul>
        
            <ul>
              <li>
                <a href="/">My orders</a>
              </li>
              <li>
                <a href="/">My account</a>
              </li>
            </ul>
        
            <ul>
              <li>
                <a href="/" class="email">propi3dad@example.com</a>
              </li>
              <li>
                <a href="/" class="sign-out">Sign out</a>
              </li>
            </ul>
          </div>
    </nav>

    <aside id="shoppingCartContainer" class="inactive">
        <div class="title-container">
          <img src="./icons/flechita.svg" alt="arrow">
          <p class="title">My order</p>
        </div>
    
        <div class="my-order-content">
          <div class="shopping-cart">
            <figure>
              <img src="https://images.pexels.com/photos/276517/pexels-photo-276517.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="bike">
            </figure>
            <p>Bike</p>
            <p>$30,00</p>
            <img src="./icons/icon_close.png" alt="close">
          </div>
    
          <div class="shopping-cart">
            <figure>
              <img src="https://images.pexels.com/photos/276517/pexels-photo-276517.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="bike">
            </figure>
            <p>Bike</p>
            <p>$30,00</p>
            <img src="./icons/icon_close.png" alt="close">
          </div>
    
          <div class="shopping-cart">
            <figure>
              <img src="https://images.pexels.com/photos/276517/pexels-photo-276517.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="bike">
            </figure>
            <p>Bike</p>
            <p>$30,00</p>
            <img src="./icons/icon_close.png" alt="close">
          </div>
    
          <div class="order">
            <p>
              <span>Total</span>
            </p>
            <p>$560.00</p>
          </div>
    
          <button class="primary-button">
            Checkout
          </button>
        </div>
      </div>
    </aside>


    <script src="<?php echo constant('URL'); ?>public/javascript/main.js"></script>
</body>
</html>