<?php
require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
require_once __DIR__ . '/src/Initialize.php';
session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
// Set Last Month Date for SQL Select
$lastMonthFirst = date('Y-m-d',strtotime('first day of last month'));
$lastMonthLast = date('Y-m-d',strtotime('last day of last month'));
$thisMonthFirst = date('Y-m-d',strtotime('first day of this month'));
$thisMonthLast = date('Y-m-d',strtotime('last day of this month'));
$month = "This";
if($_SESSION['from']){
    $thisMonthFirst = $_SESSION['from'];
    $thisMonthLast = $_SESSION['to'];
}
// If File is Imported from computer
if (isset($_POST["import"])) {
    $fileName = $_FILES["file"]["tmp_name"];
    // Delete the whole table first
    $result = mysqli_query($conn, "TRUNCATE TABLE `leads-tbl`");

    if ($_FILES["file"]["size"] > 0) {
        $file = fopen($fileName, "r");
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            $myinput=$column[8];
            $datecr=date('Y-m-d',strtotime($column[8]));
            $dateASAP=date('Y-m-d',strtotime($column[9]));
            $salesdate=date('Y-m-d',strtotime($column[10]));
            $sqlInsert = "INSERT INTO `leads-tbl` (dealid,`status`,EmailAddress,HomePhone,SecondaryPhone,Brand,source,SubSource,datecr,dateASAP,salesdate,cancelsale,utm_term,utm_campaign,utm_source,utm_medium,utm_content,hearduson,`total sold`,`days`,`was sold`,hasform,hasapp,`State`,sold_tr_rev,sold_tr_rev_net,sold_mt_rev,sold_mt_rev_net,Nurture)
                   values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "','" . $column[5] . "','" . $column[6] . "','" . $column[7] . "','" . $datecr . "','" . $dateASAP . "','" . $salesdate . "','" . $column[11] . "','" . $column[12] . "','" . $column[13] . "','" . $column[14] . "','" . $column[15] . "','" . $column[16] . "','" . $column[17] . "','" . $column[18] . "','" . $column[19] . "','" . $column[20] . "','" . $column[21] . "','" . $column[22] . "','" . $column[23] . "','" . $column[24] . "','" . $column[25] . "','" . $column[26] . "','" . $column[27] . "','" . $column[28] . "') ";                  
            $result = mysqli_query($conn, $sqlInsert);
            if (! empty($result)) {
                $type = "success";
                $message = "CSV Data Imported into the Database";
            } else {
                $type = "error";
                // $message = "Problem in Importing CSV Data";
                $message = mysqli_error($conn);
            }
        }
    }
}
if (isset($_POST["dates"])) {
    $lastMonthFirst = date('Y-m-d',strtotime('first day of last month'));
    $lastMonthLast = date('Y-m-d',strtotime('last day of last month'));
    if($_POST['date'] == "this"){
        $thisMonthFirst = date('Y-m-d',strtotime('first day of this month'));
        $thisMonthLast = date('Y-m-d',strtotime('last day of this month'));
        $month = "This";
    } elseif($_POST['date'] == "last"){
        $thisMonthFirst = $lastMonthFirst;
        $thisMonthLast = $lastMonthLast;
        $month = "Last";
    } 
    if($_POST['from']){
        $thisMonthFirst = $_POST['from'];
        $thisMonthLast = $_POST['to'];
        $month = "Selected";
    }
}
if (isset($_POST["period"])) {
    $thisMonthFirst = $_POST['from'];
    $thisMonthLast = $_POST['to'];
    $_SESSION['from'] = $thisMonthFirst;
    $_SESSION['to'] = $thisMonthLast;
}
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="/src/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" crossorigin="anonymous"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#33333d">
    <meta name="theme-color" content="#33333d">
</head>
<body>
    <p class="text-third">
        GORILLA MARKETING KPI
        <?php 
            if (isset($_SESSION["from"])) {
              echo "- FROM: <u>" . $_SESSION['from'] . "</u> TO: <u>" . $_SESSION['to'] . "</u>";
            }
        ?>
    </p>
    <a href="./?logout='1'" class="logout">Log Out</a>
