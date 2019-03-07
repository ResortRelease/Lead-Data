<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/src/Initialize.php';
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

echo "<style>#myProgress {
    width: 50%;
    background-color: #ccc;
    position:relative;
    height: 30px;
  }
  #myBar {
    position:absolute;
    left:0;
    top:0;
    width: 100%;
    height: 30px;
    background-color: green;
    color:white;
    text-align:right;
  }#myBar::after{content:'%';}</style>
  <h1>Updating DB</h1>
  <div id='record'></div>
  <div id='myProgress'>
    <div id='myBar'></div>
  </div>";
include('src/body.php');
function updateDB($conn,$currentRecord,$totalNumRecords) {
    $totalNumRecords = count(file("localFile.csv"));
    $currentRecord = 0;
    // Delete the whole table first
    $result = mysqli_query($conn, "TRUNCATE TABLE `leads-tbl`");
    // Open the file
    $file = fopen("localFile.csv", "r");
    while (($column = fgetcsv("localFile.csv", 10000, ",")) !== FALSE) {
        $myinput=$column[8];
        $datecr=date('Y-m-d',strtotime($column[8]));
        $dateASAP=date('Y-m-d',strtotime($column[9]));
        $salesdate=date('Y-m-d',strtotime($column[10]));
        $sqlInsert = "INSERT INTO `leads-tbl` (dealid,`status`,EmailAddress,HomePhone,SecondaryPhone,Brand,source,SubSource,datecr,dateASAP,salesdate,cancelsale,utm_term,utm_campaign,utm_source,utm_medium,utm_content,hearduson,`total sold`,`days`,`was sold`,hasform,hasapp,`State`,sold_tr_rev,sold_tr_rev_net,sold_mt_rev,sold_mt_rev_net,Nurture)
                values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "','" . $column[5] . "','" . $column[6] . "','" . $column[7] . "','" . $datecr . "','" . $dateASAP . "','" . $salesdate . "','" . $column[11] . "','" . $column[12] . "','" . $column[13] . "','" . $column[14] . "','" . $column[15] . "','" . $column[16] . "','" . $column[17] . "','" . $column[18] . "','" . $column[19] . "','" . $column[20] . "','" . $column[21] . "','" . $column[22] . "','" . $column[23] . "','" . $column[24] . "','" . $column[25] . "','" . $column[26] . "','" . $column[27] . "','" . $column[28] . "')";                  
        $result = mysqli_query($conn, $sqlInsert);
        $currentRecord++;
        $type = "success";
        $message = "Record " . $currentRecord . " / " . $totalNumRecords;
        $percentage = ($currentRecord/$totalNumRecords*100);
        echo "<script>
        document.getElementById('record').innerHTML = '" . $message . "';
        jQuery('#myBar').css('width', '" . $percentage . "%').html(" . round($percentage,0) . ");
        </script>";
        if (! empty($result)) {
            $type = "success";
            $message = "CSV Data Imported into the Database";
        } else {
            $type = "error";
            $message = "Problem in Importing CSV Data";
            echo mysqli_error($conn);
        }
    }
    fclose($file);
}
updateDB($conn,$currentRecord,$totalNumRecords); // call the function
?>
