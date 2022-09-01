<?php 
require('./database.php');

if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $queryCreate = "INSERT INTO info_tbl VALUES (null, '$fname', '$lname', '$email', '$password')";
    $sqlCreate = mysqli_query($con, $queryCreate);

    echo '<script>alert("Created Succesfully")</script>';
    echo "<script>window.location.href='/Technical-Exam/dashboard.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Page</title>
</head>
<body>
    <div class="container">
        <form action="/Technical-Exam/create.php" method="post">
            <input type="text" name="fname" placeholder="Enter you firstname..." required>
            <input type="text" name="lname" placeholder="Enter you lastname..." required>
            <input type="email" name="email" placeholder="Enter you email address..." required>
            <input type="password" name="password" placeholder="Enter you password..." required>
            <input type="submit" name="submit" value="Create">
        </form>
    </div>
</body>
</html>