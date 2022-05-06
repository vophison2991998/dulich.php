<?php 
	include('../config.php');
	include('function.php');
	include('check-login.php');
	 date_default_timezone_set('Asia/Ho_Chi_Minh');
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hybrid Bootstrap Admin Template</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' /> 
     
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><i class="fa fa-gear"></i> <strong>Tour Du Lịch</strong></a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a href="?page=Log-Out"><i class="fa fa-sign-out fa-fw"></i></a>
                    
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
		
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    
					


                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Tour Du Lịch<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="?page=Them-T">Thêm Tour</a>
                            </li>
                            <li>
                                <a href="?page=QL-T">Quản Lý Tour</a>
                            </li>
                    
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Loại Tour<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="?page=QL-L#ThemLoaiTour">Thêm Loại Tour</a>
                            </li>
                            <li>
                                <a href="?page=QL-L">Quản Lý Loại Tour</a>
                            </li>
                    
                        </ul>
                    </li>
                    <li>
                        <a href="?page=Log-Out"><i class="fa fa-sign-out fa-fw"></i> Đăng Xuất </a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                
				
				
                <!-- /. ROW  -->

                <?php 
							if(isset($_GET['page'])){$page=$_GET['page'];}else{$page="";}
							switch($page)
								{
								//Tour
								case "Them-T":
									include("include/Tour/Them-T.php");
								break;
								
								case "QL-T":
									include("include/Tour/QL-T.php");
								break;
								case "Sua-T":
									include("include/Tour/Sua-T.php");
								break;
								case "Xoa-T":
									include("include/Tour/Xoa-T.php");
								break;
								//LoaiTour
								
								case "QL-L":
									include("include/LoaiTour/QL-L.php");
								break;
								case "Sua-L":
									include("include/LoaiTour/Sua-L.php");
								break;
								case "Xoa-L":
									include("include/LoaiTour/Xoa-L.php");
								break;
								
								//log-out
								case "Log-Out":
									include("logout.php");
								break;
								default:
									include("include/Tour/QL-T.php");
									
								}
			?>
				
				
                <!-- /. ROW  -->
			
		
				
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
 
    <script src="tinymce/js/tinymce/tinymce.js"></script>
    
 	<script type="text/javascript">
				  tinymce.init({
					selector: '#content',
					theme: 'modern',
					
					plugins: [
					  'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
					  'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
					  'save table contextmenu directionality emoticons template paste textcolor jbimages'
					],
					toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons jbimages',
					relative_urls: false
				  });
				  
				  </script>


</body>

</html>