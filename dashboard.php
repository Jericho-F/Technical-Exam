<?php
require('./read.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <td>ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email Address</td>
                <td>Password</td>
            </tr>
            <?php while($results = mysqli_fetch_array($sqlRead)){ ?>
            <tr>
                <td><?php echo $results['Id']; ?></td>
                <td><?php echo $results['fname']; ?></td>
                <td><?php echo $results['lname']; ?></td>
                <td><?php echo $results['email']; ?></td>
                <td><?php echo $results['password']; ?></td>
            </tr>
            <?php } ?>
        </table>
        <form action="/Technical-Exam/add-new-user.php" method="post">
        <input type="submit" name="btn-create" value="Add a new user">
        </form>
    </div>
</body>
</html>