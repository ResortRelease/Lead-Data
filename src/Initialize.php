<?php 
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;
$credentials = new Aws\Credentials\Credentials('AKIAIWLNEEBTI5KQYA5A', '0zrQ+pLYgXx4naWYeOW9izz2cboLbBpeCPuDbtl/');
// Connect To DB
$conn = mysqli_connect("localhost", "root", "test1", "leads-db");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if (isset($_POST["reload"])) {
    //Do nothing, Just Reload
}

