<?php
	ob_start();
	include "../config.php";
	include "function.php";
	
	?>  
<!DOCTYPE html>
<html lang="en">
    
<head>
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    </head>
    <body>
              <div class="container">
              	<div class="row">
                <br><br><br>
                <br><br><br><div class="col-md-5 col-xs-12 col-md-offset-4 text-center"><h1>Login Admin</h1></div>
                <br><br><br>
                <hr>
                <br>
                	<div class="col-md-5 col-xs-12 col-md-offset-4">
                    <form class="form-horizontal"  method="post">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3"  name="user">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" name="pass" >
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="btn_dangnhap" class="btn btn-default">Sign in</button>
                    </div>
                  </div>
                </form>    
                <hr>
                    </div>
                </div>
              </div>
            
      
       
        <?php
		
		if(isset($_POST['btn_dangnhap'])){
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$login=login($user,$pass);
		$row=$login->fetch();
			
			if($user==$row['UserName']&&$pass==$row['Password'])
			{
				if(!isset($_SESSION))
					session_start();
					
					$_SESSION["success"]=true;
					$_SESSION['hotenadmin']=$row['Name'];
					
					echo "<script>window.location='index.php?page=QL-SP'</script>";
			}
			else
				echo "<script>alert('Thông Tin không chính xác')</script> ";
	}
?>
       
    </body>
	<?php
	ob_end_flush();
?>
</html>
