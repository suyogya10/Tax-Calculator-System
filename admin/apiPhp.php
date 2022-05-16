<?php

require "./config.php";

$sql = "SELECT * FROM vehicle_tax WHERE range_cc ='".$_GET['cc']."' AND province='".$_GET['province']."' AND moto_type='".$_GET['type']."'";
$result = mysqli_query($con, $sql);
$array = array();
while($row = mysqli_fetch_assoc($result)){

    array_push($array, $row);

};
print json_encode($array);


?>