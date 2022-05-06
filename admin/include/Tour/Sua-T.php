<?php 
	$MaTour=$_GET['MaTour'];
	$selectTour_Sua=selectTour_Sua($MaTour);
	$row_selectTour_Sua=$selectTour_Sua->fetch();

?>
<div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Thêm Tour du lịch
                        </h1>
                    </div>
</div> 
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10">
                                    <form  method="post" enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                            <label>Tên Tour</label>
                                            <input class="form-control"  value="<?php echo $row_selectTour_Sua['TenTour']?>"required="required" placeholder="Nhập Tiêu Đề" name="TenTour">
                                        </div>
                                        <div class="form-group">
                                            <label>Thời Gian </label>
                                            <input class="form-control"   value="<?php echo $row_selectTour_Sua['TGTour']?>"type="number"   required="required" placeholder="Mô tả ngắn" name="TGTour">
                                        </div>
                                        <div class="form-group">
                                            <label>Giá </label>
                                            <input class="form-control"   value="<?php echo $row_selectTour_Sua['GiaTour']?>" type="number"placeholder="Mô tả ngắn" name="GiaTour">
                                        </div>
                                        <div class="form-group">
                                            <label>Ngày Khởi Hành</label>
                                            <input class="form-control"    value="<?php echo $row_selectTour_Sua['NgayKhoiHanh']?>"type="date" required="required"  name="NgayKhoiHanh">
                                        </div>
                                        <div class="form-group">
                                            <label>Điểm Khởi Hành</label>
                                            <select class="form-control" name="IDTinhThanh">
                                                <?php
                                                	$TinhThanh=TinhThanh();
													foreach($TinhThanh as $row)
													{
														?>
															<option value='<?php echo $row['IDTinhThanh']?>' 
                                                             <?php if($row['IDTinhThanh']=$row_selectTour_Sua['IDTinhThanh'])
															 	echo "selected";
															 ?>  >
																<?php echo $row['TenTinhThanh']?>
															</option>
														<?php
													}
												?>
                                            </select>
                                        </div>
                                        <div class="form-group ">
                                            <label>Nội dung Tour</label>
                                            <textarea class="form-control"    id="content"  rows="10" name="NoiDungTour">
                                            	<?php echo $row_selectTour_Sua['NoiDungTour']?>
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Loại Tour</label>
                                            <select class="form-control" name="LoaiTourID">
                                                <?php
                                                	$LoaiTour=LoaiTour();
													foreach($LoaiTour as $row)
													{
														
														?>
															<option value='<?php echo $row['LoaiTourID']?>' se
                                                             <?php if($row['LoaiTourID']=$row_selectTour_Sua['LoaiTourID'])
															 	echo "selected";
															 ?>  >
																<?php echo $row['LoaiTourName']?>
															</option>
														<?php
													}
												?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tên Miền</label>
                                            <select class="form-control" name="IDMien">
                                                <?php
                                                	$Mien=Mien();
													foreach($Mien as $row)
													{
														
														
														?>
															<option value='<?php echo $row['IDMien']?>' se
                                                             <?php if($row['IDMien']=$row_selectTour_Sua['IDMien'])
															 	echo "selected";
															 ?>  >
																<?php echo $row['TenMien']?>
															</option>
														<?php
													}
												?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Ảnh Hiển Thị</label>
                                            <input  type="file" name="image_upload">							 																	 											<input type="hidden" name="anh_mo_ta" value="<?php echo $row_selectTour_Sua['Img']?>"  >
                                        </div>
                                        
                                        
										
                                        <div class="form-group">
                                        	<button class="btn btn-info" name="BtnSuaTour">Sửa Tour</button>
                                            <button class="btn btn-info" type="reset" >Reset</button>
                                        </div>
                                     </form>
                                     <?php
									 		
											
                                     		 if(isset($_POST['BtnSuaTour']))
												{  $TenTour=$_POST['TenTour'];
													$TGTour=$_POST['TGTour'];
													$GiaTour=$_POST['GiaTour'];
													$NoiDungTour=$_POST['NoiDungTour'];
													$NgayKhoiHanh=$_POST['NgayKhoiHanh'];
													$IDTinhThanh=$_POST['IDTinhThanh'];
													$LoaiTourID=$_POST['LoaiTourID'];
													$IDMien=$_POST['IDMien'];
													if($_FILES["image_upload"]["name"])
													{
														$image_name=$_FILES["image_upload"]["name"];
														$image_path=$_FILES["image_upload"]["tmp_name"];
														$new_image_path="../upload/".$image_name;
														$image_upload=move_uploaded_file($image_path, $new_image_path);
														
													}
													else {
														$image_name=$_POST["anh_mo_ta"];
														}
													Sua_Tour($TenTour,$TGTour,$GiaTour,$NoiDungTour,$NgayKhoiHanh,$IDTinhThanh,
													$LoaiTourID,$IDMien,$image_name,$MaTour);
													
													echo "<script>window.location='index.php?page=QL-T'</script>";
												}
									 
									 
									 
									 ?>
                                     </div><!-- col-lg-8--->
                                    </div>   <!--row -->
                                    </div>
                                    </div>
                                    </div><!-- col-lg-12 --->
                                    </div><!-- row --->
                                   