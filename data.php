<?php
$na=$_POST['na'];
$pr=$_POST['pr'];
$qnty=$_POST['qnty'];
$str=$_POST['str'];
$city=$_POST['city'];

$conn = new mysqli('localhost','root','','milkdb');
if($conn ->connect_error)
{
    die('Connection Failed/:'.$conn-> connect_error);
}
else
{
    $stmt = $conn-> prepare("insert into mildb(na, pr, qnty, str, city) values(?, ?, ?, ?, ?)");
    $stmt ->bind_param("ssiss", $na,$pr, $qnty, $str, $city);
    $stmt->execute();
    echo "Data Submitted Successfully ";
    $stmt -> close();
    $conn -> close();
}
?>
