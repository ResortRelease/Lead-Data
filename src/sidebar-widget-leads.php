<?php
// New Leads
$sqlSelect1 = "SELECT * FROM `leads-tbl` WHERE datecr BETWEEN '$thisMonthFirst' AND '$thisMonthLast' ORDER BY datecr DESC";
$result = mysqli_query($conn, $sqlSelect1);
$message = mysqli_error($conn);
$leadcount = 0;
  if (mysqli_num_rows($result) > 0) {
    foreach($result as $row){
      $leadcount++;
    }
  }

// SM Leads
$sqlSelect2 = "SELECT * FROM `leads-tbl` WHERE datecr BETWEEN '$thisMonthFirst' AND '$thisMonthLast' 
  AND source LIKE '%facebook%'";
$result = mysqli_query($conn, $sqlSelect2);
$message = mysqli_error($conn);
$smcount = 0;
  if (mysqli_num_rows($result) > 0) {
    foreach($result as $row){
      $smcount++;
    }
  }

// PPC Leads
$sqlSelect3 = "SELECT * FROM `leads-tbl` WHERE datecr BETWEEN '$thisMonthFirst' AND '$thisMonthLast' 
  AND source LIKE '%ppc%'";
$result = mysqli_query($conn, $sqlSelect3);
$message = mysqli_error($conn);
$ppccount = 0;
  if (mysqli_num_rows($result) > 0) {
    foreach($result as $row){
      $ppccount++;
    }
  }

// Sold Leads
$sqlSelect4 = "SELECT * FROM `leads-tbl` WHERE salesdate BETWEEN '$thisMonthFirst' AND '$thisMonthLast' 
AND `was sold`='1'";
$result = mysqli_query($conn, $sqlSelect4);
$message = mysqli_error($conn);
$soldcount = 0;
if (mysqli_num_rows($result) > 0) {
  foreach($result as $row){
    $soldcount++;
  }
}

// Print Leads
$sqlSelect5 = "SELECT * FROM `leads-tbl` WHERE datecr BETWEEN '$thisMonthFirst' AND '$thisMonthLast' 
  AND `Nurture` LIKE '%Mail Drop%'";
$result = mysqli_query($conn, $sqlSelect5);
$message = mysqli_error($conn);
$printcount = 0;
if (mysqli_num_rows($result) > 0) {
  foreach($result as $row){
    $printcount++;
  }
}


// Text Blast Leads
$sqlSelect6 = "SELECT * FROM `leads-tbl` WHERE datecr BETWEEN '$thisMonthFirst' AND '$thisMonthLast' 
  AND `Nurture` LIKE '%Text Blast%'";
$result = mysqli_query($conn, $sqlSelect6);
$message = mysqli_error($conn);
$printcount = 0;
if (mysqli_num_rows($result) > 0) {
  foreach($result as $row){
    $textcount++;
  }
}

// Email Leads
$sqlSelect7 = "SELECT * FROM `leads-tbl` WHERE datecr BETWEEN '$thisMonthFirst' AND '$thisMonthLast' 
  AND `Nurture` LIKE '%Email%'";
$result = mysqli_query($conn, $sqlSelect7);
$message = mysqli_error($conn);
$emailcount = 0;
if (mysqli_num_rows($result) > 0) {
  foreach($result as $row){
    $emailcount++;
  }
}

// Cancel Leads
$sqlSelect8 = "SELECT * FROM `leads-tbl` WHERE datecr BETWEEN '$thisMonthFirst' AND '$thisMonthLast' 
  AND `cancelsale`='1'";
$result = mysqli_query($conn, $sqlSelect8);
$message = mysqli_error($conn);
$cancelcount = 0;
if (mysqli_num_rows($result) > 0) {
  foreach($result as $row){
    $cancelcount++;
  }
}
?>