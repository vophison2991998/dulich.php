<ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        
        <?php
				$LoaiTour=LoaiTour();
				foreach($LoaiTour as $row)
				{
			?>
                <li class="menu-item">
                	<a href="?page=list-tour&&LoaiTourID=<?php echo $row['LoaiTourID']?>"><?php echo $row['LoaiTourName']?></a>
 				</li>
                
                <?php }?>
        <?php
				$LoaiMien=LoaiMien();
				foreach($LoaiMien as $row)
				{
			?>
                <li class="menu-item">
                	<a href="?page=list-tour&&IDMien=<?php echo $row['IDMien']?>"><?php echo $row['TenMien']?></a>
 				</li>
                
                <?php }?>
</ul>