<?php 
$conn = mysqli_connect("localhost", "root", "test1", "leads-db");
$data = $_POST['datecolor'];
$data = json_decode($data, true);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
foreach ($data as $key => $val)
{
  $id=$val['id'];
  $color = $val['color'];
  $sqlInsert = "INSERT INTO `calendar` (`id`,`color`) VALUES ('" . $id . "','" . $color ."')
  ON DUPLICATE KEY UPDATE
    `id`= '$id',
    `color`= '$color'";
  $result = mysqli_query($conn, $sqlInsert);
}
echo "Saved";
mysqli_close($conn);
?>