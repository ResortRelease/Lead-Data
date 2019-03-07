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
		<h1>Leads This Month ASAP</h1>
		<?php include('src/this-month-leads-by-asap.php') ?>
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