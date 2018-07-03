<?php 
if(isset($_POST['btn_login'])){
    login();
}

function login(){
    include 'conn.php';
   $pos =  $_POST['position'];
   $mail = $_POST['emails'];
   $passwd = $_POST['passd'];

   $qry = "select * from `$pos` where `email`= '$mail' AND `password`='$passwd'";
   $exec_qry = mysqli_query($conn,$qry)or die(mysqli_error($conn));

   if (mysqli_num_rows($exec_qry)=="1"){
       $user_logged_in = mysqli_fetch_array($exec_qry);
    
        session_start();
        $_SESSION['status'] = true ;
        $_SESSION['full_name'] =  $user_logged_in['fname'];
        $_SESSION['user_id'] = $user_logged_in['id'];
       if($pos == "staff"){
        header("Location:../dashboard/dashboard.php");
       }
       elseif($pos == "customer"){
        header("Location:../customer/customer.php");
       }
   
   }
   else {
       header("Location:index.php");
   }

}

?>