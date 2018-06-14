<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Form</title>
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
    <div class="flex-center" style="margin-top: 100px;" >
        <div class="card" style="width: 380px;">
            <div class="card-header text-center danger-color text-white">
                <strong> EQUITY MERU CRM</strong>
            </div>
            <div class="card-body">
                <form action="class/auth.php" method="post">
                    <div class="form-group">
                        <label for="pos">Your Position</label>
                        <select name="position" id="pos" class="form-control">
                            <option value="" selected>Position :</option>
                            <option value="">Staff</option>
                            <option value="">Customer</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="uname">Username</label>
                        <input type="text" name="username" id="uname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" name="passd" id="pass" class="form-control">
                    </div>
                    <hr>
                    <div>
                        <button type="reset" class="btn btn-outline-danger float-left">Reset</button>
                        <button type="submit" class="btn btn-outline-danger float-right">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>