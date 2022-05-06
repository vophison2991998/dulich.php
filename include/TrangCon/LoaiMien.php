<ul class="nav">
       	
        	<?php
				$LoaiMien=LoaiMien();
				foreach($LoaiMien as $row)
				{
			?>
                <li class="menu-item">
                	<a href="?page=list-tour&&IDMien=<?php echo $row['IDMien']?>"><?php echo $row['TenMien']?></a>
 				</li>
                
                <?php }?>
                
				    
</ul><!-- /.nav -->