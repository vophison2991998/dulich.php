<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Quản Lý Tour
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
                                            <th>Mã Tour</th>
                                            <th>Tên Tour</th>
                                            <th>Thời Gian</th>
                                            <th>Giá</th>
                                            <th>Ảnh</th>
                                            <th>Ngày Đi</th>
                                            <th>Nơi Đi</th>
                                            <th>Loại Tour</th>
                                            
                                           
                                            <th>Sửa</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
											 $tour=tour();
											 foreach($tour as $row)
											 {
												 ?>
                                                 <tr class='gradeU'>
                                                 	<td><?php echo $row['MaTour']?></td>
                                                    <td><?php echo $row['TenTour']?></td>
                                                    <td><?php echo $row['TGTour']?> Ngày</td>
                                                    <td><?php echo number_format($row['GiaTour'])?></td>
                                                    <td><img src="../upload/<?php echo $row['AnhTour']?>" width="100px" height="40px" /></td>
                                                    <td><?php echo $row['NgayKhoiHanh']?></td>
                                                    <td><?php echo $row['TenTinhThanh']?></td>
                                                    <td><?php echo $row['LoaiTourName']?></td>
                                                    
                                                    
                                                    <td><a href="?page=Sua-T&&MaTour=<?php echo $row['MaTour']?>"/>Sửa</a></td>
                                                    <td><a href="?page=Xoa-T&&MaTour=<?php echo $row['MaTour']?>"/>Xóa</a></td>
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
                