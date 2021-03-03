<?PHP


$serverName = "localhost"; 
$userName = "premiu10_planning";  
$userPassword = "planning@db2021";  
$dbName = "premiu10_planning"; // ชื่อฐานข้อมูล 

date_default_timezone_set('Asia/Bangkok');

$conn = new mysqli($serverName,$userName,$userPassword,$dbName);
mysqli_set_charset($conn,"utf8");

if ($conn->connect_errno) {
echo $conn->connect_error;
exit;
} else {

}
?>