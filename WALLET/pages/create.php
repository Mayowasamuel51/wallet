<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <style>
        form{
            margin-top:40px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
        }
        label{
            padding-top:14px;
            padding-bottom:12px;
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
                <header class='has-text-weight-semibold  '>MAYWALLET</header>
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

    <form action='\WALLET/Backend/createaccount.php' method='post' class='column mt-6 is-offset-4 is-5-desktop'>
        <h1 class='has-text-centered is-size-4 has-text-weight-semibold'> CREATE A  WALLET</h1>
        <i class="fa-solid fa-money-bill-transfer mt-6  column is-offset-4" style='font-size:50px'></i>
        <div class="field mt-3">
            <label class="label is-normal">FULLNAME </label>
            <div class="control has-icons-left has-icons-right">
                <input class="input "name="fullname" type="text" placeholder="FULLNAME">
                <span class="icon is-small is-left">
                    <i class="fas fa-user fa-xs"></i>
                </span>
                <span class="icon is-small is-right">
                    <i class="fas fa-check fa-xs"></i>
                </span>
            </div>
        </div>

        <div class="field">
        <label class="label ">Email</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input "name="email" type="email" placeholder="Email">
                <span class="icon is-left">
                    <i class="fas fa-envelope fa-sm"></i>
                </span>
                <span class="icon is-right">
                    <i class="fas fa-check fa-sm"></i>
                </span>
            </div>
        </div>

        <div class="field">
        <label class="label ">Password </label>
            <div class="control has-icons-left has-icons-right">
                <input class="input" type="password" name="password" placeholder="password">
                <span class="icon is- is-left">
                    <i class="fas fa-lock"></i>
                </span>
                <span class="icon is-large is-right">
                    <i class="fas fa-check"></i>
                </span>
            </div>
        </div>

        <div class="field">
        <label class="label ">Repert-Password</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input " type="password" name="password_confirmation" placeholder="password">
                <span class="icon is-medium is-left">
                    <i class="fas fa-lock fa-lg"></i>
                </span>
                <span class="icon is-medium is-right">
                    <i class="fas fa-check fa-lg"></i>
                </span>
            </div>
        </div>
        <button id='btn' name="create" class='is-fullwidth button is-info has-text-weight-semibold mt-6'>Create Account</button>
        <h1 class='has-text-centered '>Already have an Account?  <a href="wallethomepage.php" class='pl-3'>Login</a></h1>
</form>









    <script src="\WALLET/js/jquery-3.6.0.min.js"></script>
   
    
</body>

</html>