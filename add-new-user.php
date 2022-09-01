<?php
require('./database.php');

if(isset($_POST['btn-create'])){
    echo "<script>window.location.href='/Technical-Exam/create.php'</script>";
}
?>