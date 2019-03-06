<?php
require_once __DIR__ . '/vendor/autoload.php';
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;
include('src/Initialize.php');
  echo 'RELOAD';
    // Open the file
    $file = fopen("localFile.csv", "r");
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
            echo mysqli_error($conn);
        }
    }
    fclose($file);
?>