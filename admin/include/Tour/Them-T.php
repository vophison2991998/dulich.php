
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
                                            <input class="form-control"   required="required" placeholder="Nhập Tiêu Đề" name="TenTour">
                                        </div>
                                        <div class="form-group">
                                            <label>Thời Gian </label>
                                            <input class="form-control"   type="number"   required="required" placeholder="Mô tả ngắn" name="TGTour">
                                        </div>
                                        <div class="form-group">
                                            <label>Giá </label>
                                            <input class="form-control"    type="number"placeholder="Mô tả ngắn" name="GiaTour">
                                        </div>
                                        <div class="form-group">
                                            <label>Ngày Khởi Hành</label>
                                            <input class="form-control"    type="date" required="required"  name="NgayKhoiHanh">
                                        </div>
                                        <div class="form-group">
                                            <label>Điểm Khởi Hành</label>
                                            <select class="form-control" name="IDTinhThanh">
                                                <?php
                                                	$TinhThanh=TinhThanh();
													foreach($TinhThanh as $row)
													{
														echo "
															<option value='".$row['IDTinhThanh']."'>
																".$row['TenTinhThanh']."
															</option>
														";
													}
												?>
                                            </select>
                                        </div>
                                        <div class="form-group ">
                                            <label>Nội dung Tour</label>
                                            <textarea class="form-control"    id="content"  rows="10" name="NoiDungTour"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Loại Tour</label>
                                            <select class="form-control" name="LoaiTourID">
                                                <?php
                                                	$LoaiTour=LoaiTour();
													foreach($LoaiTour as $row)
													{
														echo "
															<option value='".$row['LoaiTourID']."'>
																".$row['LoaiTourName']."
															</option>
														";
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
														echo "
															<option value='".$row['IDMien']."'>
																".$row['TenMien']."
															</option>
														";
													}
												?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Ảnh Hiển Thị</label>
                                            <input class="form-control" required="required" type="file" placeholder="Enter text" name="image_upload">
                                        </div>
                                        
                                        
										
                                        <div class="form-group">
                                        	<button class="btn btn-info" name="BtnThemTour">Thêm Tour</button>
                                            <button class="btn btn-info" type="reset" >Reset</button>
                                        </div>
                                     </form>
                                     <?php
									 		
											
                                     		if(isset($_POST['BtnThemTour']))
											{   $TenTour=$_POST['TenTour'];
												$TGTour=$_POST['TGTour'];
												$GiaTour=$_POST['GiaTour'];
												$NoiDungTour=$_POST['NoiDungTour'];
												$NgayKhoiHanh=$_POST['NgayKhoiHanh'];
												if($_FILES["image_upload"]["name"])
												{
													$image_name=$_FILES["image_upload"]["name"];
													$image_path=$_FILES["image_upload"]["tmp_name"];
													$new_image_path="../upload/".$image_name;
													$image_upload=move_uploaded_file($image_path, $new_image_path);
													 //khai báo thuộc tính 'enctype' chỗ form mới chạy được! 
												}
												
												
												$day= date("d",strtotime($NgayKhoiHanh));
												$month= date("m",strtotime($NgayKhoiHanh));
												$year=date("Y",strtotime($NgayKhoiHanh));
												$NgayKhoiHanh2=$day."-".$month."-".$year;
												
												$IDTinhThanh=$_POST['IDTinhThanh'];
												$LoaiTourID=$_POST['LoaiTourID'];
												$IDMien=$_POST['IDMien'];
												
												
												$NgayThem=date("Y-m-d");//ham lay ngay hien tai

												
												 
												Them_Tour($TenTour,$TGTour,$GiaTour,$NoiDungTour,$image_name,$NgayKhoiHanh,$IDTinhThanh,$LoaiTourID,$IDMien,$NgayThem);
												echo"<script>alert('Thêm Thành Công !'); window.location='index.php?page=QL-T'</script>";
											}
									 
									 ?>
                                     </div><!-- col-lg-8--->
                                    </div>   <!--row -->
                                    </div>
                                    </div>
                                    </div><!-- col-lg-12 --->
                                    </div><!-- row --->
                                   