<div class="container-fluid" style="color:#333; background:#f5f5f5; margin-bottom:0px;">
    <div class="container">
		<?php 
			$LoaiTour=LoaiTour();
			foreach($LoaiTour as $row)
			{
		?>
        
		<div class='row'>
						<div class='col-lg-12'  align='center'>
							<h3 class='page-header'><span class='glyphicon glyphicon-star-empty'></span>
                            <strong><?php echo $row['LoaiTourName']?></strong> <span class='glyphicon glyphicon-star-empty'></span></h3>
						</div>
				<?php 
                	$BonTourTheoLoai=BonTourTheoLoai($row['LoaiTourID']);
					foreach($BonTourTheoLoai as $row2)
					{
                ?>
				<div class='col-sm-3 col-xs-6'>
						<a href='?page=loaibaiviet&MaTour=<?php echo $row2['MaTour']?>'>
							<img class='img-rounded' alt='' width='100%' height='150' src='upload/<?php echo $row2['AnhTour']?>'>
						</a>
						<h4 style='color:#212121' align='center'><?php echo $row2['TenTour']?></h4>
           			 </div>
			
			
				<?php }?>
			
			
		</div>
	<?php } 
		$LoaiMien=LoaiMien();
		foreach($LoaiMien as $row)
		{
			
	?>
    	<div class='row'>
						<div class='col-lg-12'  align='center'>
							<h3 class='page-header'><span class='glyphicon glyphicon-star-empty'></span>
                            <strong><?php echo $row['TenMien']?></strong> <span class='glyphicon glyphicon-star-empty'></span></h3>
						</div>
				<?php 
                	$BonTourTheoMien=BonTourTheoMien($row['IDMien']);
					foreach($BonTourTheoMien as $row2)
					{
                ?>
				<div class='col-sm-3 col-xs-6'>
						<a href='?page=loaibaiviet&MaTour=<?php echo $row2['MaTour']?>'>
							<img class='img-rounded' alt='' width='100%' height='150' src='upload/<?php echo $row2['AnhTour']?>'>
						</a>
						<h4 style='color:#212121' align='center'><?php echo $row2['TenTour']?></h4>
           			 </div>
			
			
				<?php }?>
			
			
		</div>
    <?php }?>
    </div> <!-- end container --->
</div>   