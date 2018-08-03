<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forgot Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../css/mdb.min.css" rel="stylesheet">
    
    <link href="../css/style.css" rel="stylesheet">
</head>
<style>
     body{
        background-color: #F1F1F1;
    }
</style>
<body>
<form>
    <div class="flex-center">
        <div class="row" style="width:35em;margin-top:10em;">
            <div class="col-md-6">
                <div class="form-group">
                    <select class="form-control" name="pos">
                        <option value="">Customer</option>
                        <option value="">Staff</option>
                    </select>
                </div>
                <div class="form-group" >
                <label for="email">Email Addres</label>
                <input type="email" class="form-control" name="c_email" required/>
                </div>
            </div>
            <div class="col-md-6" >
                <button type="submit" class="btn btn-sm btn-primary" name="btn_reset" style="margin-top:35px;">Reset Password</button>
            </div>
        </div>
    </div>
</form>
<?php 
if (isset($_POST['btn_reset'])) {
    forgot();
}
function forgot(){
include 'class/conn.php';
$cmail = $_POST['c_email'];
$pos = $_POST['pos'];
// UPDATE `$user` SET `id`='$cmail' WHERE 
$emails = "SELECT * FROM `$pos` WHERE email = '$cmail'"; 
$exec = mysqli_query($conn , $emails);
if (mysqli_num_rows($exec) == "1") {
   echo " ?>
             <form method='post'>
                    <div class='form-group' >
                <label for='new'>Email Addres</label>
                <input type='email' class='form-control' name='new_pass' required/>
                </div>
                <div class='form-group' >
                <label for='email'>Email Addres</label>
                <input type='email' class='form-control' name='c_pass' required/>
                </div>
                </form>
   <?php ";
}
}
?>
</body>
</html>