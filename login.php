<?php 
require('./database.php');

if(isset($_POST['login-btn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $queryLogin = "SELECT * FROM info_tbl WHERE email = '$email' AND password = '$password'";
    $sqlLogin = mysqli_query($con, $queryLogin);

    if(mysqli_num_rows($sqlLogin) > 0){
        echo "<script>window.location.href='/Technical-Exam/home.php'</script>";
    } else {
        echo 'invalid';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
</head>
<body>
    <form action="/Technical-Exam/login.php" method="post">
        <input type="email" name="email" placeholder="Enter valid email address" required>
        <input type="password" name="password" placeholder="Enter your password" required>
        <input type="submit" name="login-btn" value="login">
    </form>
</body>
</html>