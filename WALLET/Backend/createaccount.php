<?php
include $_SERVER['DOCUMENT_ROOT'].'\WALLET/connection/conn.php';
if(isset($_POST['create'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $check_password = $_POST['password_confirmation'];
    if(empty($fullname) || empty($email) || empty($check_password) || empty($password)){
        header('Location:http://localhost/WALLET/pages/create.php?fill the input');
        exit();
    }elseif($password != $check_password){
        header('Location:http://localhost/WALLET/pages/create.php?password error');
        exit();
    }else{
        $stmt = mysqli_stmt_init($conn);
        $sql = "SELECT * FROM  maywallet where email = ?";
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header('Location:http://localhost/WALLET/pages/create.php?Error with database');
            exit();
        }
        mysqli_stmt_bind_param($stmt,'s', $email);
        mysqli_execute($stmt);
        $get_result = mysqli_stmt_get_result($stmt);
        $find_email = mysqli_fetch_assoc($get_result);
        if($find_email){
          
            header('Location:http://localhost/WALLET/Backend/userexist.php?');
          
        }else{
           $insert_data = "INSERT INTO maywallet(fullname,email,password,account_number,account_balance) VALUES(?,?,?,?,?)";
           if(!mysqli_stmt_prepare($stmt,$insert_data)){
                header('Location:http://localhost/WALLET/pages/create.php?Error with database');
            exit();
            }
           else{
            $create_account = rand(979689691,775757);
            $account_b = 0;
            $password_hased = password_hash($password,PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt,'sssss', $fullname,$email,$password_hased,$create_account,$account_b);
            mysqli_execute($stmt);
            header('Location:http://localhost/WALLET/pages/wallethomepage.php?Data Successfully');
            exit();
            }
        }
    }
}



