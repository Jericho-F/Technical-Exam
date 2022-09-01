<?php 
require('./database.php');

$queryRead = "SELECT * FROM info_tbl";
$sqlRead = mysqli_query($con, $queryRead);

?>