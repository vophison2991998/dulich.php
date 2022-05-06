<ul class="nav">
       	
        	<?php
				$LoaiTour=LoaiTour();
				foreach($LoaiTour as $row)
				{
			?>
                <li class="menu-item">
                	<a href="?page=list-tour&&LoaiTourID=<?php echo $row['LoaiTourID']?>"><?php echo $row['LoaiTourName']?></a>
 				</li>
                
                <?php }?>
                
				    
</ul><!-- /.nav -->