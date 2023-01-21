<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title>Payroll Management System</title>


    <link rel="stylesheet" href="assets/css/login.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

</head>
<?php session_start();
 
include_once('connect.php');
  
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    $stmt = $con->prepare("SELECT * FROM 'login'");
    $stmt->bind_param('ss', $username, $password);
    $stmt->execute();
    $users = $stmt->fetchAll();
     
    foreach($users as $user) {

        if(($user['username'] == $username) && ($user['password'] == $password)) {
                header("location: home.php");
        }
        else {

            ?>
            <script>
            alert('Login Invalid, please try again.');
            window.location.href='login.php';
            </script>

            <?php
            //die();
        }
    }
}
 
?>

</html>