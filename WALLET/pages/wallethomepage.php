<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
       <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <style>
    body {
        background-image: linear-gradient(to right top, #051937, #011c47, #061d56, #161c64, #291971);
    }

    .navbar {
        background-color: #011627;
    }

    .navbar a {
        color: white;
        /* padding-left:19px; */
    }
    .manage{
        font-family: 'Poppins', sans-serif;
    }

    a:hover {
        border: none;
    }
    </style>



    <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                <header class='has-text-weight-semibold  '>MAY<p></p>WALLET</header>
            </a>

            <a role="button" class="navbar-burger toggle" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start" style='margin-left:70px;'>
                <a class="navbar-item">
                    Home
                </a>

                <a class="navbar-item">
                    Apps
                </a>

                <a class="navbar-item">
                    Services
                </a>

                <a class="navbar-item mr-5 ">
                    Documentation
                </a>
            </div>
        </div>




        <div class="navbar-end">

            <div class="navbar-item has-text-weight-semibold  ">

                <div class="buttons">
                    <a href='deposit.php' class="has-text-weight-semibold   button mr-6 is-dark">
                        <strong>Deposit  </strong>
                    </a>
                    <a href='create.php' class="button has-text-weight-semibold is-dark">
                        Sign Up
                    </a>
                </div>
            </div>
        </div>
        </div>
    </nav>


    <section class='columns mt-6'>

        <div class="hero column is-7-desktop mt-6  ">
            <div class="hero-body">
                <h1 class='is-size-1 has-text-weight-semibold has-text-white '><h1 class= 'manage has-text-weight-bold is-size-1 has-text-white'>Manage Your Account With  MayWallet.<br></h1><br>
                <p class= 'has-text-white'>Manage All your Payment in one Wallet.</p>

                <div class='is-flex mt-6'>
                    <button class='button'>Get Started  </button>
                    <button class='button ml-6'>Download App </button>
                </div>
            </div>
        </div>



        <div class='hero column is-5-desktop mt-6  '>
            <div class='hero-body has-background-light mr-6' >
                <h1 class='is-size-4 has-text-weight-semibold has-text-centered'>Welcome Back!!!</h1>

                <form action="" mehtod='post' class="field">
                    <div class="second"></div>
                    <input type="text" class='input is-size-5  mt-5 email' placeholder='email'>

                    <input type="password" class='input is-size-5 mt-5 password' placeholder='password'>
                    <div class='complete'></div>
                    <button class='button btn has-text-weight-semibold is-fullwidth is-info is-size-6 mt-6'>SIGH
                        IN</button>

                </form>
            </div>
        </div>
    </section>





    <script src="\WALLET/js/jquery-3.6.0.min.js"></script>
    <script src="\WALLET/js/maywallet.js"></script>
    
</body>
</html>