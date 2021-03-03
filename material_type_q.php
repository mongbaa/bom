<?PHP

include "config.inc.php"; // ไฟล์ตดิตอ่ฐานข้อมลู

$date_material_type = date('Y-m-d H:i:s');

$material_type_name = $conn -> real_escape_string($_POST['material_type_name']);
if(isset($_POST['material_type_status'])){ $material_type_status = $conn -> real_escape_string($_POST['material_type_status']); }else{ $material_type_status = 0;}



if(!empty($_POST['material_type_id'])){  

$sql_up= "UPDATE tbl_bom_material_type SET  material_type_name = '$material_type_name', material_type_status = '$material_type_status' where material_type_id = $_POST[material_type_id] ";
$conn->query($sql_up); 
	
}else{

$sql_in= "INSERT INTO tbl_bom_material_type (material_type_id, material_type_name,  material_type_status) VALUES (NULL, '$material_type_name', '$material_type_status')";
$conn->query($sql_in); 	
	
}


           echo "<script wg='text/javascript'>";
           echo  "alert('[บันทึกข้อมูลสำเร็จ]');";
           echo "window.location='material_type.php';";
           echo "</script>";

?>