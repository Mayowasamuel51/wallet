<?php 
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="\MRTICKET/node_modules/bulma/css/bulma.css">
    <link rel="stylesheet" href="\MRTICKET/Public/custom/booking.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <style>
    .column {
        margin-top: 60px;
    }
    </style>
    <form action=""method='post'>
    <div class='column is-offset-4 is-5-desktop'>
        <h2 class='has-text-centered is-size-4 has-text-weight-semibold p-4 pt-4'>DEPOSIT  INTO WALLET</h2>
        <hr>
        <div class="field">
            <label for="" class='pb-3 second has-text-weight-bold'>Amount </label>
            <p class="control has-icons-left has-icons-right mt-4">
                <input class="input amount"  type="text"  placeholder="Deposit Amount ">
                <span class="icon is-small is-left">
                  <i class="fa-solid fa-naira-sign"></i>
                </span>
                <span class="icon is-small is-right">
                    <i class="fas fa-check"></i>
                </span>
            </p>
        </div>
        <hr>
        <div class="field">
            <label for="" class='pb-3 has-text-weight-bold'>Account Number</label>
            <p class="control has-icons-left mt-4">
                <input class="input account_number" name='account_number' type="text" placeholder="Account Number">
                <span class="icon is-small is-left">
                    <!-- <i class="fas fa-lock"></i> -->
                    <i class="fa-solid fa-input-numeric"></i>
                </span>
            </p>
        </div>
        <div class="field ">
          
            <p class="control">
            <div class='complete'>

</div>
                <button  id='btn' class="has-text-weight-semibold button btn is-primary is-fullwidth">
                    Deposit
                </button>

              
            </p>
        </div>
    </div>
</form>
  <script src="\WALLET/js/jquery-3.6.0.min.js"></script>
    <script src="\WALLET/js/deposit.js"></script>
    
</body>
<html>