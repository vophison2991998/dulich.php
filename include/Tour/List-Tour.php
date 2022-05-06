<?php
	
	if(isset($_REQUEST["LoaiTourID"]))
		{
			$LoaiTourID=$_GET['LoaiTourID'];
			$TourTheoLoai=TourTheoLoai($LoaiTourID);
			$TenLoai=LoaiTour2($LoaiTourID);
			$row_TenLoai=$TenLoai->fetch();
?>
<div class="col-md-12" style=" text-align:center; margin-top:0; text-transform:uppercase;">
                                    	<h1><?php echo $row_TenLoai['LoaiTourName'] ?></h1>
</div>	

<?php   foreach($TourTheoLoai as $row)
{ ?>
<div class='col-sm-12 col-md-12' style="margin-bottom:20px" >
							<div class='products'>
										
								<div class='product'>		
									<div class='product-image col-md-5 col-sm-12' >
										<div class='image' style='height:200px'>
											<a href='?page=chi-tiet-tour&&MaTour=<?php echo $row['MaTour']?>'><img class='img-rounded'  src='upload/<?php echo $row['AnhTour']?>' height='100%' width='100%' ></a>
										</div><!-- /.image -->			
							
																	   
									</div><!-- /.product-image -->
										
									
									<div class='product-info text-left col-md-7 col-sm-7' style='text-align:center;'>
										
                                        <div class="container-fuild" style="text-align:left;">
                                        	<div class="row">
                                            	<div class="col-md-12 text-left">
                                                	<h3><strong><?php echo $row['TenTour']?></strong></h3>
                                                    
                                                </div>
                                                <div class="col-md-12">
                                                	<table class="table">
                                                    	<tr>
                                                        	<td>Khu Vuc: <?php echo $row['TenMien']?></td>
                                                            <td>Loai Tour:<?php echo $row['LoaiTourName']?></td>
                                                            <td>Gia:<?php echo $row['GiaTour']?> đ</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                        	<td>Số Ngày:<?php echo $row['TGTour']?> ngày</td>
                                                            <td>Nơi đi:đà nẵng</td>
                                                            <td><a href="?page=chi-tiet-tour&&MaTour=<?php echo $row['MaTour']?>" class="btn btn-primary">Chi Tiết Tour</a></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
							
									</div><!-- /.product-info -->
												
								</div><!-- /.product -->
                                
                                        
							  
							</div><!-- /.products -->
                            
</div><!-- /.item --><br>
<?php }?> 


				
<?php 
		}
		else
			{
				$IDMien=$_GET['IDMien'];
				$LoaiMien2=LoaiMien2($IDMien);
				$row_LoaiMien2=$LoaiMien2->fetch();
				$TourTheoMien=TourTheoMien($IDMien);
				
?>
<div class="col-md-12" style=" text-align:center; margin-top:0; text-transform:uppercase;">
                                    	<h1><?php echo $row_LoaiMien2['TenMien'] ?></h1>
</div>	

<?php   foreach($TourTheoMien as $row)
{ ?>
<div class='col-sm-12 col-md-12' style="margin-bottom:20px" >
							<div class='products'>
										
								<div class='product'>		
									<div class='product-image col-md-5 col-sm-12' >
										<div class='image' style='height:200px'>
											<a href='?page=chi-tiet-tour&&MaTour=<?php echo $row['MaTour']?>'><img class='img-rounded'  src='upload/<?php echo $row['AnhTour']?>' height='100%' width='100%' ></a>
										</div><!-- /.image -->			
							
																	   
									</div><!-- /.product-image -->
										
									
									<div class='product-info text-left col-md-7 col-sm-7' style='text-align:center;'>
										
                                        <div class="container-fuild" style="text-align:left;">
                                        	<div class="row">
                                            	<div class="col-md-12 text-left">
                                                	<h3><strong><?php echo $row['TenTour']?></strong></h3>
                                                    
                                                </div>
                                                <div class="col-md-12">
                                                	<table class="table">
                                                    	<tr>
                                                        	<td>Khu Vuc: <?php echo $row['TenMien']?></td>
                                                            <td>Loai Tour:<?php echo $row['LoaiTourName']?></td>
                                                            <td>Gia:<?php echo $row['GiaTour']?> đ</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                        	<td>Số Ngày:<?php echo $row['TGTour']?> ngày</td>
                                                            <td>Nơi đi:đà nẵng</td>
                                                            <td><a href="?page=chi-tiet-tour&&MaTour=<?php echo $row['MaTour']?>" class="btn btn-primary">Chi Tiết Tour</a></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
							
									</div><!-- /.product-info -->
												
								</div><!-- /.product -->
                                
                                        
							  
							</div><!-- /.products -->
                            
</div><!-- /.item --><br>
<?php }?> 
				
<?php }?>

	
