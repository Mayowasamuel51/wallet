<?php


include $_SERVER['DOCUMENT_ROOT'].'\WALLET/connection/conn.php';
if(isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt = mysqli_stmt_init($conn);
    $statement = "SELECT  * from maywallet WHERE email = ? or fullname = ? ";
    if(!mysqli_stmt_prepare($stmt,$statement)){
        echo "<div class= 'has-text-centered notification mt-4 mb-4  is-warning'>
            <h2 class='has-text-weight-semibold is-size-5-desktop'> <a href='dashboard.php' class='pl-6 '>Error with Databae </a></h2>
          </div>";
    }
    mysqli_stmt_bind_param($stmt,'ss', $email,$password);
    mysqli_execute($stmt);
    $get_result = mysqli_stmt_get_result($stmt);
    $find_email= mysqli_num_rows($get_result);
    if($find_email > 0){
        $rows_password = mysqli_fetch_assoc($get_result);

        $password_working = password_verify($password,$rows_password['password']);
        if($password_working === false){
            echo "<div class= 'has-text-centered notification mt-4 mb-4  is-warning'>
            <h2 class='has-text-weight-semibold is-size-5-desktop'>password not correct try again</h2>
          </div>";
        }elseif($password_working === true){
            session_start();
            $_SESSION['fullname'] = $rows_password['fullname'];
            $_SESSION['email'] = $rows_password['email'];
            $_SESSION['account_number'] = $rows_password['account_number'];
            $_SESSION['account_balance'] = $rows_password['account_balance'];
            echo "<div class= 'has-text-centered notification mt-4 mb-4  is-primary'>
            <h2 class='has-text-weight-semibold is-size-5-desktop'> <a href='\WALLET/pages/dashboard.php' class='pl-6 '>Click to Enter dashboard </a></h2>
          </div>";

        }
       
    }else{
        echo "<div class= 'has-text-centered notification   is-warning'>
              <h2 class='has-text-weight-semibold is-size-5-desktop'>This user does not exist </h2>
            </div>";   
    }
}