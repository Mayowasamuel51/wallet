<?php
session_start();
// echo $_SESSION['account_number'];
include $_SERVER['DOCUMENT_ROOT'].'\WALLET/connection/conn.php';
if(isset($_POST['amount']) && isset($_POST['account_number'])){
    $amount = $_POST['amount'];
    $account_number = $_POST['account_number'];


   
    $stmt = mysqli_stmt_init($conn);
    $statement = "SELECT  * from maywallet WHERE account_number= ?";
    if(!mysqli_stmt_prepare($stmt,$statement)){
        header('Location:http://localhost/MrTicket/View/quickMoney/create.php?Error with database');
        exit();
    }
    mysqli_stmt_bind_param($stmt,'s', $account_number);
    mysqli_execute($stmt);
    $get_result = mysqli_stmt_get_result($stmt);
    // $find_account = mysqli_fetch_assoc($get_result);

    $find_account = mysqli_num_rows($get_result);
    if($find_account >  0){
        
        $update_account_1  = "UPDATE maywallet set account_balance = account_balance +  '".$amount."'   where account_number = '".$account_number."' ";
    
        mysqli_query($conn,$update_account_1);
        echo "<div class='has-text-centered notification mt-4  mb-4  is-success'>
        <h2 class='has-text-weight-semibold is-size-5-desktop'>
    Deposit Successfully</h2>
     </div>";

     
    }else{
        echo "<div class='has-text-centered notification mt-4  mb-4  is-warning'>
            <h2 class='has-text-weight-semibold is-size-5-desktop'>
            Account Number does not exist</h2>
        </div>";
    }

}



