<?php
require_once('../dbconf.php');


$id = mysqli_real_escape_string($conn,$_POST['id']);
$adult = mysqli_real_escape_string($conn,$_POST['adult']);
$children = mysqli_real_escape_string($conn,$_POST['children']);
$suite = mysqli_real_escape_string($conn,$_POST['suite']);
$no = mysqli_real_escape_string($conn,$_POST['no']);
$from_date =strtotime($_POST['from_date']);
$from_date = date("Y-m-d",$from_date);
$from_date = mysqli_real_escape_string($conn,$_POST['from_date']);
$to_date =strtotime($_POST['to_date']);
$to_date = date("Y-m-d",$to_date);
$to_date = mysqli_real_escape_string($conn,$_POST['to_date']);
if (empty($adult)) {
    echo "<font color='red'>Note field is empty.</font><br/>";
}else{
    $result = mysqli_query($conn,"UPDATE booking SET adult='$adult', children='$children', suite='$suite', 
no='$no', from_date='$from_date', to_date='$to_date' WHERE id=$id");

}

?>


<?php
$id = $_POST['id'];
$adult = $_POST['adult'];
$children = $_POST['children'];
$suite = $_POST['suite'];
$no = $_POST['no'];
$from_date = $_POST['from_date'];
$to_date = $_POST['to_date'];

//$id = $_GET['id'];

$sql = "SELECT * FROM booking WHERE id=$id";
$result = $conn->query($sql);
while($row=$result->fetch_assoc()){
    $adult = $row['adult'];
    $children = $row['children'];
    $suite = $row['suite'];
    $no = $row['no'];
    $from_date = $row['from_date'];
    $to_date = $row['to_date'];
}
?>
