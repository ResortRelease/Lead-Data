<?php
$conn = mysqli_connect("localhost", "root", "test1", "leads-db");
$result = mysqli_query($conn, "TRUNCATE TABLE `leads-tbl`");
$page = '/';
header('Location: '.$page, true, 303);
exit;
?>