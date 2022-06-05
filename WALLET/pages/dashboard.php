<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="\MRTICKET/node_modules/bulma/css/bulma.css">
    <link rel="stylesheet" href="\MRTICKET/Public/custom">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <style>
    form {
        margin-top: 40px;
    
    }

    label {
        padding-top: 14px;
        padding-bottom: 12px;
    }
    </style>

    <section class='columns'>
        <div class='card column is-4-desktop'>
            <header class='card-header'>
                <div class='card-header-title'>Personal Info</div>
            </header>
            <div class='card-content'>
                <p class='pb-4 has-text-weight-semibold'>FULLNAME :<?php echo$_SESSION['fullname'];
                  ?></p><br>
                <p class='pb-4 has-text-weight-semibold'>EMAIL : <?php  echo  $_SESSION['email'];?></p><br>
                <p class='pb-4 has-text-weight-semibold'>ACCOUNT BALANCE : <span>&#x20A6;</span>
                    <?php
                include $_SERVER['DOCUMENT_ROOT'].'\WALLET/connection/conn.php';
                $statement = "SELECT *  FROM maywallet WHERE email = '".$_SESSION['email']."' ";
                $query = mysqli_query($conn,$statement);
                
                while($rows = mysqli_fetch_assoc($query)){
                     $_SESSION['account_balance'] = $rows['account_balance'];
                     echo $rows['account_balance'];
                
                }
              
                ?></p><br>

                <p class='pb-4 has-text-weight-semibold'>ACCOUNT NUMBER: <?php  echo  $_SESSION['account_number'];?></p>
                <br>
               <form action="logout.php" method="post">
                    <button name="logout"class='button is-info is-small'>Logout </button>
               </form>
                <!-- </div> -->

            </div>
        </div>

        <div class='card column'>
            <header class='card-header'>
                <div class='card-header-title'>Transfer & Payment </div>
            </header>
            <div class='card-content'>
                <div class='columns'>



                    <form action="" method='POST' class='column '>
                        <div class='frist'>
                            <h1 class='second  has-text-weight-semibold pl-6 pb-4 has-text-centered-desktop'>Send Funds
                                to Others</h1>
                            <label for="" class='pb-5 has-text-weight-bold'>Revicer Account Number</label><br>
                            <input type="text" class='input receive mt-4 '><br>


                              <div class="field">
                            <label for="" class='pb-3 has-text-weight-bold'>Amount </label>
                            <p class="control has-icons-left mt-4">
                                <input class="input send"  type="text" >
                                <span class="icon is-small is-left">
                                   <i class="fa-solid fa-naira-sign"></i>
                                </span>
                            </p>
                            </div>

                         
                            <div class='complete'></div>
                            <button class='button is-dark btn is-fullwidth mt-5'>Transfer</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>



   
    <script src="\WALLET/js/jquery-3.6.0.min.js"></script>
    <script src="\WALLET/js/transfer.js"></script>

</body>

</html>