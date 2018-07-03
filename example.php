<?php
session_start();

$connect = mysql_connect('localhost', 'root', '') or die('Database could not connect');
$select = mysql_select_db('test', $connect) or die('Database could not select');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    chckusername($username, $password);
}

function chckusername($username, $password){

    $check = "SELECT * FROM login WHERE username='$username'";
    $check_q = mysql_query($check) or die("<div class='loginmsg'>Error on checking Username<div>");

    if (mysql_num_rows($check_q) == 1) {
        chcklogin($username, $password);
    }
    else{
        echo "<div id='loginmsg'>Wrong Username</div>";
    }
}

function chcklogin($username, $password){

    $login = "SELECT * FROM login WHERE username='$username'  and password='$password'";
    $login_q = mysql_query($login) or die('Error on checking Username and Password');

    if (mysql_num_rows($login_q) == 1){
        echo "<div id='loginmsg'> Logged in as $username </div>"; 
        $_SESSION['username'] = $username;
        header('Location: member.php');
    }
    else {
        echo "<div id='loginmsg'>Wrong Password </div>"; 
        //header('Location: login-problem.php');
    }
}
?>
/* creating the config file  
*/

<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'demo');
 
/* Attempt to connect to MySQL database */

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>  