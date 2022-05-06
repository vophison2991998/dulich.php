<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Quản Lý Loại Tour
                        </h1>
                    </div>
</div> 
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Mã Loại Tour</th>
                                            <th>Tên Loại Tour</th>
                                            
                                            
                                           
                                            <th>Sửa</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
											 $LoaiTour=LoaiTour();
											 foreach($LoaiTour as $row)
											 {
												 ?>
                                                 <tr class='gradeU'>
                                                 	<td><?php echo $row['LoaiTourID']?></td>
                                                    <td><?php echo $row['LoaiTourName']?></td>
                                                    
                                                    <td><a href="?page=Sua-L&&LoaiTourID=<?php echo $row['LoaiTourID']?>"/>Sửa</a></td>
                                                    <td><a href="?page=Xoa-L&&LoaiTourID=<?php echo $row['LoaiTourID']?>"/>Xóa</a></td>
                                                 </tr>
                                                 <?php
											}
										?>
                                    	
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
                <hr>
                <div class="row" id="ThemLoaiTour">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Thêm Loại Tour
                        </h1>
                    </div>
</div> 
<div class="row">
                    <div class="col-md-5">
                        <form method="post">
                        				<div class="form-group">
                                            <label>Tên Loại Tour </label>
                                            <input class="form-control"   type="text"   required="required"  name="LoaiTourName">
                                        </div>
                                        <div class="form-group">
                                        	<button class="btn btn-info" name="BtnLoaiTour">Thêm Loại Tour</button>
                                            
                                        </div>
                        </form>
                    </div>
</div> 
<?php 
			if(isset($_POST['BtnLoaiTour']))
			{
				$LoaiTourName=$_POST['LoaiTourName'];
				Them_LoaiTour($LoaiTourName);
				echo"<script>alert('Thêm Thành Công !'); window.location='index.php?page=QL-L'</script>";
			}
?>
                