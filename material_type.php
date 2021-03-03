<?php include"header.php";?>

<?php 
if(!empty($_SESSION['id_member'])){

 }else{  

echo "<script wg='text/javascript'>";
echo "window.location='login.php';";
echo "</script>";
 }

?>




<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">




  <!-- daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap material_type Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-material_typepicker/css/bootstrap-material_typepicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>จัดการข้อมูล material_type  </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">หน้าแรก</a></li>
              <li class="breadcrumb-item active"> material_type </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">





<?php 

if(isset($_GET['material_type_id'])){

  include "config.inc.php"; 
    $sql_edit = "SELECT * FROM tbl_bom_material_type where material_type_id='$_GET[material_type_id]' "; 
    $query_edit = $conn->query($sql_edit); 
    $result_edit = $query_edit->fetch_assoc();
	
	$material_type_id=$result_edit['material_type_id'];
	$material_type_name=$result_edit['material_type_name'];
	$material_type_status=$result_edit['material_type_status'];
	
	
  }else{
	
	$material_type_id="";
	$material_type_name="";
	$material_type_status="";
	
}

		
		
if(isset($_GET['del'])){


      include "config.inc.php"; 
      $sql_del= "DELETE FROM tbl_bom_material_type WHERE tbl_bom_material_type.material_type_id = $_GET[del]";
      $conn->query($sql_del); 
      
              echo "<script type='text/javascript'>";
            //echo  "alert('[บันทึกข้อมูสำเร็จ]');";
              echo "window.location='material_type.php';";
              echo "</script>";
      }
		
		
    ?>




      <!-- Default box -->
        <div class="card card-secondary">
        <div class="card-header">
          <h3 class="card-title">เพิ่มข้อมูล material_type </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        <!-- /.card-body -->
			<form name="form1" method="post" action="material_type_q.php">  
				<div class="row">
					
					
						

					
					

								<div class="col-sm-2">
								  <div class="form-group">
									<input name="material_type_id" type="hidden" value="<?php echo $material_type_id;?>" />
									<input type="text" name="material_type_name"  class="form-control" placeholder="material_type_name" value="<?php echo $material_type_name;?>" required>
								  </div>
								</div>
					
					
			
					
					
								<div class="col-sm-2">
									  <div class="form-group">
										  <select name="material_type_status" id="level_material_type" class="form-control" required>					
											<option value=""> เลือกสถานะ </option>  
											<option value="1" <?php if (!(strcmp("1", $material_type_status))) {echo "selected=\"selected\"";} ?>>  เปิดใช้งาน </option>	<option value="0" <?php if (!(strcmp("0", $material_type_status))) {echo "selected=\"selected\"";} ?> >  ปิดใช้งาน </option>  
										  </select>
									  </div>
								</div>
					
					
					
								<div class="col-sm-3">
									  <div class="form-group">
									  <button type="submit" class="btn btn-info">บันทึก</button> 
									  <button type="reset" class="btn btn-default">ยกเลิก</button>
									  </div>
								 </div>

				</div>
			</form>

        </div><!-- /.card-body -->

        <!-- /.card-footer-->
      </div>
      <!-- /.card -->













       <!-- Default box -->
       <div class="card card-secondary">
        <div class="card-header">
          <h3 class="card-title">แสดงข้อมูล material_type </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
		   
        <div class="card-body">
        
        

        <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
				 <th>NO</th>
				 <th>NAME</th>
				 <th>STATUS</th>
                 <th>Manage</th>
                </tr>
                </thead>
                <tbody>

<?PHP 
include "config.inc.php"; 				
$sql =" SELECT * FROM tbl_bom_material_type as c ";

$sql.=" ORDER BY c.material_type_id ASC ";							
$query= $conn->query($sql); 
$i=0;
while($result = $query->fetch_assoc()) 
{ $i++;
?> 
                <tr>
				  <td><?php echo $i;?></td>
                  <td><?php echo $result['material_type_name'];?></td>
				  <td style="background-material_type:<?php echo $result['material_type_status'];?>"><?php echo $result['material_type_status'];?></td>
					 <td>
					  <?php  
							    $material_type_status = $result['material_type_status'];
								switch ($material_type_status) { // Harder page
								case 1 :   echo  "<i class='fas fa-check-circle' style='font-size:24px;material_type:#27AE60'></i> เปิดใช้งาน"; break;
								case 0 :   echo  "<i class='fas fa-times-circle' style='font-size:24px;material_type:red'></i> ปิดใช้งาน"; break;
								default :  echo  "<i class='fas fa-history'></i> -"; break;	  
							   }
					   ?>
					</td>
                  <td>
		<a href="?material_type_id=<?php echo $result['material_type_id'];?>" class="btn btn-info"><i class="fas fa-edit"></i> แก้ไข</a>
		<a href="?del=<?php echo $result['material_type_id'];?>" class="btn btn-danger" onClick="return confirm('กรุณายืนยันการลบอีกครั้ง !!!')" > <i class="fas fa-trash-alt"></i> ลบ</a>  

                  </td>
               </tr>

<?php } ?>


            
                </tbody>
              </table>


        </div>
        <!-- /.card-body -->
        <div class="card-footer">
       แสดงข้อมูล material_type / การบำรุงรักษา 
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->











    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php include"footer.php";?>


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap material_type picker -->
<script src="plugins/bootstrap-material_typepicker/js/bootstrap-material_typepicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>


<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //material_typepicker
    $('.my-material_typepicker1').material_typepicker()
    //material_type picker with addon
    $('.my-material_typepicker2').material_typepicker()

    $('.my-material_typepicker2').on('material_typepickerChange', function(event) {
      $('.my-material_typepicker2 .fa-square').css('material_type', event.material_type.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>






<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>


<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>


</body>
</html>


  