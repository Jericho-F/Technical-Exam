<?php 
require('./read.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <table>
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
            </tr>
            <?php while($results = mysqli_fetch_array($sqlRead)){ ?>
            <tr>
                <td><?php echo $results['fname']; ?></td>
                <td><?php echo $results['lname']; ?></td>
                <td>
                    <form action="/Technical-Exam/add-friend.php" method="post">
                        <input type="hidden" name="fname" value="<?php echo $results['fname']; ?>">
                        <input type="hidden" name="lname" value="<?php echo $results['lname']; ?>">
                        <input type="submit" name="add-friend" value="Add">
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>
</body>
</html>