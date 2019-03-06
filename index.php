<?php 
require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload
require_once __DIR__ . '/src/Initialize.php';

// Set Last Month Date for SQL Select
$lastMonthFirst = date('Y-m-d',strtotime('first day of last month'));
$lastMonthLast = date('Y-m-d',strtotime('last day of last month'));

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
?>
<!DOCTYPE html>
<html>
<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<style>
		body {
        font-family: Arial;
        width: 100%;
        max-width:100%;
        padding:10px;
        margin:0 auto;
    }
		button {
			background:#ff9900!important;
			text-shadow: 0px 0px 1px #000000;
		}
    .outer-scontainer {
        background: #F0F0F0;
        border: #e0dfdf 1px solid;
        padding: 20px;
        border-radius: 2px;
    }

    .input-row {
        margin-top: 0px;
        margin-bottom: 20px;
    }

    .btn-submit {
        border: #1d1d1d 1px solid;
        color: #fff;
        font-size: 0.9em;
        width: 100px;
        border-radius: 2px;
        cursor: pointer;
    }

    .outer-scontainer table {
        border-collapse: collapse;
        width: 100%;
    }

    .outer-scontainer th {
        border: 1px solid #dddddd;
        padding: 8px;
        text-align: left;
    }

    .outer-scontainer td {
        border: 1px solid #dddddd;
        padding: 8px;
        text-align: left;
    }

    #response {
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 2px;
        display:none;
    }

    .success {
        background: #c7efd9;
        border: #bbe2cd 1px solid;
    }

    .error {
        background: #fbcfcf;
        border: #f3c6c7 1px solid;
    }

    div#response.display-block {
        display: block;
    }
    table{
        border: 1px solid black;
        table-layout: fixed;
    }

    th, td {
        border: 1px solid black;
        width: 100px;
        overflow: hidden;
    }
    tr { background: white; }
    tr:nth-child(even) { background: #f8fbfb }
	</style>
</head>
<body>
	<h2>Import S3 CSV file</h2>
	<div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>">
		<?php if(!empty($message)) { echo $message; } ?>
	</div>
	<div class="outer-scontainer container-fluid">
		<?php include('src/form-import.php'); ?>
		<h1>Leads This Month</h1>
		<?php include('src/this-month-leads.php') ?>
		<br><br>
		<h1>Leads Last Month</h1>
		<?php include('src/last-month-leads.php') ?>
	</div>

</body>
<!-- Test if imported file is in CSV format -->
<script type="text/javascript">
	var $ = jQuery.noConflict();
	$(document).ready(
		function () {
			$("#frmCSVImport").on(
				"submit",
				function () {

					$("#response").attr("class", "");
					$("#response").html("");
					var fileType = ".csv";
					var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" +
						fileType + ")$");
					if (!regex.test($("#file").val().toLowerCase())) {
						$("#response").addClass("error");
						$("#response").addClass("display-block");
						$("#response").html(
							"Invalid File. Upload : <b>" + fileType +
							"</b> Files.");
						return false;
					}
					return true;
				});
		});
</script>

</html>
<?php mysqli_close($conn); ?>