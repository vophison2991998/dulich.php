<div id="hero" class="home-page-slider4">
	<div id="owl-main" class="owl-carousel silder4 owl-inner-nav owl-ui-sm">
		<?php
        	$TourBanner=TourBanner();
			foreach($TourBanner as $row)
			{
		?>
		<div class="item" style="background-image: url(upload/<?php echo $row['AnhTour']?>);">
			<div class="container-fluid">
				<div class="caption vertical-center text-left">
					<div class="big-text fadeInDown-1">
						<?php echo $row['TenTour']?>-<span class="highlight"><?php echo $row['TenMien']?></span> 
					</div>

					<div class="excerpt m-t-20 fadeInDown-2 hidden-xs">
					
						<span>
							Ngày Khởi Hành : <?php echo $row['NgayKhoiHanh']?><br>
							Giá Tiền : <?php echo number_format($row['GiaTour'])?> đ	
						</span>
					</div>
					<div class="button-holder fadeInDown-3">
						<a href="?page=chi-tiet-tour&&MaTour=<?php echo $row['MaTour']?>" class="btn btn-black btn-uppercase shop-now-button">Chi Tiết</a>
					</div>
				</div><!-- /.caption -->
			</div><!-- /.container-fluid -->
		</div><!-- /.item -->
        

		
<?php }?>
		
		

	</div><!-- /.owl-carousel -->
	<div class="customNavigation">
		<div class="container">
				
				<div class="controls clearfix hidden-xs">
					<a href="#" data-target=".silder4" class="btn btn-primary pull-left owl-prev"><i class="fa fa-angle-left"></i></a>
					<a href="#" data-target=".silder4" class="btn btn-primary pull-right owl-next"><i class="fa fa-angle-right"></i></a>
				</div><!-- /.controls -->
				
			</div>
	</div>
</div>