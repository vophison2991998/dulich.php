<?php
	$MaTour=$_GET['MaTour'];
	$ChiTietTour=ChiTietTour($MaTour);
	$row=$ChiTietTour->fetch();
?>
<style >
                 	.col-md-12 a{
						color:#009F55
						}
                 </style>
<div class="col-md-12" style=" text-align:center; margin-top:0; ">
                 <h1 style="text-transform:uppercase;"><?php echo $row['TenTour']?></h1>
                 <br><br>
                 
                 <h4>
                 	<p>Địa chỉ: Địa chỉ: 27 Cống Quỳnh, P. Nguyễn Cư Trinh, Quận 1, TP. Hồ Chí Minh  </p>
                    <p>Call: 0905.580.089   - Hotline:  0905.580.089 </p>
                    <p> Email:  tourgiare@gmail.com</p>
                 </h4>
                 
                 <hr>
                 <div class="col-md-12"  style="font-size:large; text-align:justify;">
                 	<?php echo $row['NoiDungTour']?>
                   
                 </div>
                 
                 <br /><br />
                 
                
</div>	