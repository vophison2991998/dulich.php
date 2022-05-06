<?php 
	$LoaiTourID=$_GET['LoaiTourID'];
	$LoaiTour2=LoaiTour2($LoaiTourID);
	$row=$LoaiTour2->fetch();
?>
<div class="row" id="ThemLoaiTour">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Sửa Loại Tour
                        </h1>
                    </div>
</div> 
<div class="row">
                    <div class="col-md-5">
                        <form method="post">
                        				<div class="form-group">
                                            <label>Tên Loại Tour </label>
                                            <input class="form-control" type="text" required value="<?php echo $row['LoaiTourName']?>" name="LoaiTourName">
                                        </div>
                                        <div class="form-group">
                                        	<button class="btn btn-info" name="BtnLoaiTour">Sửa Loại Tour</button>
                                            
                                        </div>
                        </form>
                    </div>
</div> 
<?php 
			if(isset($_POST['BtnLoaiTour']))
			{
				$LoaiTourName=$_POST['LoaiTourName'];
				Sua_LoaiTour($LoaiTourName,$LoaiTourID);
				echo"<script>; window.location='index.php?page=QL-L'</script>";
			}
?>
                