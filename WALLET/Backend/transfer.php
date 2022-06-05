<?php
session_start();
// echo $_SESSION['account_number'];
include $_SERVER['DOCUMENT_ROOT'].'\WALLET/connection/conn.php';
if(isset($_POST['receive']) && isset($_POST['send'])){
    $receive = $_POST['receive'];
    $send = $_POST['send'];

    $stmt = mysqli_stmt_init($conn);
    $statement = "SELECT  * from maywallet WHERE account_number= ? ";
    if(!mysqli_stmt_prepare($stmt,$statement)){
       echo "<div class='has-text-centered notification mt-4  mb-4  is-warning'>
        <h2 class='has-text-weight-semibold is-size-5-desktop'>
        DATABASE ERROR  </h2>
         </div>";
    }
    mysqli_stmt_bind_param($stmt,'s', $receive);
    mysqli_execute($stmt);
    $get_result = mysqli_stmt_get_result($stmt);
    // $find_account = mysqli_fetch_assoc($get_result);

    $check_account = mysqli_num_rows($get_result);
    if($check_account >  0){
      $query_account = "SELECT * FROM maywallet WHERE account_number = '".$_SESSION['account_number']."'  ";
      $query_system = mysqli_query($conn,$query_account);

      if($row_data= mysqli_fetch_assoc($query_system)){
         $_SESSION['account_balance'] = $row_data['account_balance'];
            // $_SESSION['ad_card'] = $row_data['airtime'];
         if ($_SESSION['account_balance'] >= $send) {
            mysqli_begin_transaction($conn);
            $update_account_sender = "UPDATE maywallet  set account_balance = account_balance - '".$send."' where account_number= '".$_SESSION['account_number']."'   ";
        mysqli_query($conn,$update_account_sender);
        $update_account_revceive = "UPDATE maywallet  set account_balance =  account_balance + '".$send."' where account_number  = '".$receive."'   ";
      
        mysqli_query($conn,$update_account_revceive);
        echo "<div class='has-text-centered notification mt-4  mb-4  is-success'>
        <h2 class='has-text-weight-semibold is-size-5-desktop'>
        Transfer Successfully </h2>
         </div>";
         mysqli_commit($conn);
      }else{
           echo  "<div class='has-text-centered notification mt-4  mb-4  is-warning'>
        <h2 class='has-text-weight-semibold is-size-5-desktop'>
        U dont Have Enough Fund </h2> </div>";
         }



         
      }
        // mysqli_commit($conn);
        // $update_account_sender = "UPDATE maywallet  set account_balance = account_balance - '".$send."' where account_number= '".$_SESSION['account_number']."'   ";
        // mysqli_query($conn,$update_account_sender);
        // $update_account_revceive = "UPDATE maywallet  set account_balance =  account_balance + '".$send."' where account_number  = '".$receive."'   ";
      
        // mysqli_query($conn,$update_account_revceive);
        // echo "<div class='has-text-centered notification mt-4  mb-4  is-success'>
        // <h2 class='has-text-weight-semibold is-size-5-desktop'>
        // Transfer Successfully </h2>
        //  </div>";
        // mysqli_rollback($conn);



    
    }else{
       echo "<div class='has-text-centered notification mt-4  mb-4  is-warning'>
        <h2 class='has-text-weight-semibold is-size-5-desktop'>
        Receiver Account Number  does not exist</h2>
    </div>";
    }
        

}
