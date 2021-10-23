<?php

$connect = mysqli_connect("localhost","root","","datatest") or die ("Connect ERROR");

$name = $_POST['name'];
$sername = $_POST['sername'];
$derp = $_POST['department'];
// $timestamp_future = strtotime("+ 1mins");
$timestamp_future = strtotime("+ 5days");
$date_future = date("Y-m-d H:i:s", $timestamp_future);

$timestamp_now = strtotime("now");
$date_now = date("Y-m-d H:i:s", $timestamp_now);

$sql = "INSERT INTO setderp (name,sername,derp,date,updateday,isUpdate) VALUES ('$name','$sername','$derp','$timestamp_now','$timestamp_future','1')";
$result = mysqli_query($connect,$sql); //save data
if($result) {
    echo "done";
} else {
    mysqli_error($connect);
}

echo $timestamp_now. "  ";
echo $date_now. "  ";
echo $timestamp_future. "  ";
echo $date_future;

?>