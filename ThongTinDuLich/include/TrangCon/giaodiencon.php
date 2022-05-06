<br>
<br>

<div class="jumbotron" style="margin-bottom:10px; background-image:url(upload/banner.jpg);">
      <div class="container text-center">
        <h1 style="color:#00FF80">Travel.com</h1>      
        <p style="color:#9FF">Thõa mãn mọi lúc mọi nơi</Online Storep>
  		</div>
</div>

<div class="container-fluid" style="background:#fff;margin-bottom:0px;">
	<div class="container"  style="margin-left:1%; margin-top:5px">
    	<div class="row">
        
        	  <div class="col-md-3 sidebar">
              		<div class="side-menu animate-dropdown outer-bottom-xs" style=" font-family:Tahoma, Geneva, sans-serif;">
    <div class="head" style=" font-family: Arial, Helvetica, sans-serif"><i class="icon fa fa-align-justify fa-fw"></i>Giá Thành</div>        
    <nav class="yamm megamenu-horizontal" >
        <?php include('include/TrangCon/LoaiTour.php')?>
    </nav><!-- /.megamenu-horizontal -->
    
</div><!-- /.side-menu -->
<!-- Theo Mien --->
<div class="side-menu animate-dropdown outer-bottom-xs" style=" font-family:Tahoma, Geneva, sans-serif;">
    <div class="head" style=" font-family: Arial, Helvetica, sans-serif"><i class="icon fa fa-align-justify fa-fw"></i> Theo Miền</div>        
    <nav class="yamm megamenu-horizontal" >
        <?php include('include/TrangCon/LoaiMien.php')?>
    </nav><!-- /.megamenu-horizontal -->
    
</div><!-- /.side-menu -->
<!-- Theo Mien--->

<!-- ================================== TOP NAVIGATION : END ================================== -->
			<!-- ============================================== SPECIAL OFFER ============================================== -->


              </div>
              
        	  <div class="col-md-9" >
              		<div class="search-result-container ">
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane active " id="grid-container">
								
								<div class="row">
              		<?php
							if(!isset($_GET['page'])){$page="";}else{$page=$_GET['page'];}
							  switch($page)
							  {
								case "list-tour":
									include "include/Tour/List-Tour.php";
								break;
								case "chi-tiet-tour":
									include "include/Tour/ChiTiet-Tour.php";
								break;
								
								
								default:
									include "include/Tour/ChiTiet-Tour.php";
								break;	
							  }
					?>		  
              		</div>
                    	</div>
                        	</div></div>
                            <br>
                            <br>
              </div>
 				 
              
		</div>
    </div>
</div> <!-- End container-fluid -->