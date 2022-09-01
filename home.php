<?php
require('./database.php');

if(isset($_POST['add-btn'])){
    echo "<script>window.location.href='/Technical-Exam/add-friend-page.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<?php require('./add-friend.php'); ?>
    <div class="container">
        <h1>Welcome</h1>
        <form action="/Technical-Exam/home.php" method="post">
            <input type="submit" name="add-btn" value="Add a friend">
        </form>

        <h2>My Friend(s)</h2>
        <table>
            <tr>
                <td>Firstname</td>
                <td>Lastname</td>
            </tr>
            <?php while($friends = mysqli_fetch_array($sqlAdd)){ ?>
            <tr>
                <td><?php echo $friends['fname']; ?></td>
                <td><?php echo $friends['lname']; ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>