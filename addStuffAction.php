<?php
include 'connection.php';


$item =  $_GET['item'];
$action = $_GET['action'];
$date = date_create();

if(!$_GET['m']) {
	$mes=date("m");
}else {
	$mes=$_GET['m'];
}
if(!$_GET['y']) {
	$ano= date("Y");
}else{
	$ano= $_GET['y'];
}
$sql = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if ($action == "action") { 
	
}elseif ($mode == "getMunicipios") { 

}elseif ($mode == "getRegion") {
	

}elseif ($mode == "getRegionPrice") {

	
}


echo($sql);
/*$result = $conn->query($sql);

$rows = array();
while($r = $result->fetch_assoc()) {
  $rows[] = $r;
}

echo json_encode($rows);*/


$conn->close();
?>

