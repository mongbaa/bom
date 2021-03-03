<?PHP
	  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> BOM & STOCK System</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
   <!-- DataTables -->
   <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
		
		 <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">BOM & STOCK System</a>
      </li>
      
     <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">หน้าแรก</a>
      </li>

   
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
  
  <!-- <aside class="main-sidebar sidebar-dark-primary elevation-4">-->
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">BOM & STOCK<</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
		
		<?php if(isset($_SESSION['id_member'])){?>
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          
        </div>
		  
		
        <div class="info">
          <a href="#" class="d-block"> 
			  
	  <?php 
           
				 
				 
						 if(isset($_SESSION['id_member'])){
					
							    $name_member=$_SESSION['name_member'];
						     	$last_member=$_SESSION['last_member'];
							 	  $level_member=$_SESSION['level_member'];  
                  $user_member=$_SESSION['user_member'];  
                  $id_zone=$_SESSION['id_zone'];  
                

						 }else{ 

							    $name_member="";
						     	$last_member="";
							 	  $level_member="";  
                  $user_member="";
                  $id_zone="";
						 }
			 
		
		  ?>
			  ยินดีต้อนรับ : <?php echo $name_member; ?> <?php echo $last_member; ?>
			
			
			</a>
        </div>
		
		  
      </div>
		 <?php }?>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
         
              
			
             

			      <li class="nav-item">
                <a href="index.php" class="nav-link">
                  <i class="fa fa-home nav-icon"></i>
                  <p>หน้าแรก</p>
                </a>
              </li>


			


           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
               ข้อมูลพื้นฐาน
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
			
			
		      	<li class="nav-item">
                <a href="product.php" class="nav-link">
                  <i class="far fa-edit nav-icon"></i>
                  <p>material_type</p>
                </a>
             </li>


             
			
		
			
             </ul>
 <?php }?>



<?php if(isset($_SESSION['id_member'])){?>
			
			<li class="nav-item">
                <a href="logout.php" class="nav-link">
                  <i class="fa fa-unlock nav-icon"></i>
                  <p>ออกจากระบบ</p>
                </a>
              </li>
			
<?php }else{?>
			
			<li class="nav-item">
                <a href="login.php" class="nav-link">
                  <i class="fa fa-lock nav-icon"> </i>
                  <p>เข้าสู่ระบบ</p>
                </a>
              </li>
<?php }?>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

