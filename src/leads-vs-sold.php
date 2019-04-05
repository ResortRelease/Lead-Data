<?php
  $lastMonthFirst = date('Y-m-d',strtotime('first day of last month'));
  $lastMonthLast = date('Y-m-d',strtotime('last day of last month'));
  $thisMonthFirst = date('Y-m-d',strtotime('first day of this month'));
  $thisMonthLast = date('Y-m-d',strtotime('last day of this month'));
  
  $month = "This";
  // Connection
  $data = array();
  $conn = mysqli_connect("localhost", "root", "test1", "leads-db");

  //Previous Month

  $sqlSelect = "SELECT * FROM `leads-tbl` WHERE salesdate BETWEEN '$lastMonthFirst' AND '$lastMonthLast' ORDER BY salesdate DESC";
  $result = mysqli_query($conn, $sqlSelect);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
      if($row['was sold']==1){
        $sold += 1;
      }
    }
  }

  // TOTAL LEADS
  $sqlSelect = "SELECT * FROM `leads-tbl` WHERE dateASAP BETWEEN '$lastMonthFirst' AND '$lastMonthLast' ORDER BY dateASAP DESC";
  $result = mysqli_query($conn, $sqlSelect);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $leads += 1;
    }
  }
  $data[] = (object) array('month' => 'Last Month', 'leads' => $leads, 'sold' => $sold);

  // reset
  $sold = 0;
  $leads = 0;

  // This Month
  $sqlSelect = "SELECT * FROM `leads-tbl` WHERE salesdate BETWEEN '$thisMonthFirst' AND '$thisMonthLast' ORDER BY salesdate DESC";
  $result = mysqli_query($conn, $sqlSelect);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
      if($row['was sold']==1){
        $sold += 1;
      }
    }
  }

  // TOTAL LEADS
  $sqlSelect = "SELECT * FROM `leads-tbl` WHERE dateASAP BETWEEN '$thisMonthFirst' AND '$thisMonthLast' ORDER BY dateASAP DESC";
  $result = mysqli_query($conn, $sqlSelect);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $leads += 1;
    }
  }
  $data[] = (object) array('month' => 'This Month', 'leads' => $leads, 'sold' => $sold);


  // $data[] = (object) array();
  $result->close();
  print json_encode($data);
?>