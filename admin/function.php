<?php
	function LoaiTour()
	{
		global $db;
		$query='select * from loaitour';
		$statement = $db->prepare($query);
		$statement->execute();
		return $statement;
	}
	function Mien()
	{
		global $db;
		$query='select * from mien';
		$statement = $db->prepare($query);
		$statement->execute();
		return $statement;
	}
	function TinhThanh()
	{
		global $db;
		$query='select * from tinhthanh';
		$statement = $db->prepare($query);
		$statement->execute();
		return $statement;
	}
	function LoaiTour2($LoaiTourID)
	{
		global $db;
		$query='select * from loaitour where LoaiTourID=:LoaiTourID';
		$statement = $db->prepare($query);
		$statement->bindParam(':LoaiTourID',$LoaiTourID );
		$statement->execute();
		return $statement;
	}
	function Them_Tour($TenTour,$TGTour,$GiaTour,$NoiDungTour,$AnhTour,$NgayKhoiHanh,$IDTinhThanh,$LoaiTourID,$IDMien,$NgayThem){
        global $db;
        $query="INSERT INTO tour 
			    (TenTour, TGTour, GiaTour,NoiDungTour,AnhTour, NgayKhoiHanh, IDTinhThanh,LoaiTourID,IDMien,NgayThem) 
		values (:TenTour,:TGTour,:GiaTour,:NoiDungTour,:AnhTour,:NgayKhoiHanh,:IDTinhThanh,:LoaiTourID,:IDMien,:NgayThem)";
		$statement = $db->prepare($query);
        $statement->bindParam(':TenTour', $TenTour);
		$statement->bindParam(':TGTour', $TGTour);
		$statement->bindParam(':GiaTour',$GiaTour );
		$statement->bindParam(':NoiDungTour',$NoiDungTour );
		$statement->bindParam(':AnhTour',$AnhTour );
		$statement->bindParam(':NgayKhoiHanh', $NgayKhoiHanh);
		$statement->bindParam(':IDTinhThanh', $IDTinhThanh);
		$statement->bindParam(':LoaiTourID',$LoaiTourID );
		$statement->bindParam(':IDMien',$IDMien );
		$statement->bindParam(':NgayThem',$NgayThem );
		
		  
        $statement->execute();
        $statement-> closeCursor();         
    }
	function tour()
	{
		global $db;
		$query='select * from tour t inner join loaitour l
		on t.LoaiTourID=l.LoaiTourID
		inner join tinhthanh tt on t.IDTinhThanh=tt.IDTinhThanh
		inner join mien m on t.IDMien=m.IDMien ';
		$statement = $db->prepare($query);
		$statement->execute();
		return $statement;
	}
	function selectTour_Sua($MaTour)
	{
		global $db;
		$query='select * from tour where MaTour=:MaTour';
		$statement = $db->prepare($query);
		$statement->bindParam(':MaTour',$MaTour );
		$statement->execute();
		return $statement;
	}
	function Sua_Tour($TenTour,$TGTour,$GiaTour,$NoiDungTour,$NgayKhoiHanh,$IDTinhThanh,$LoaiTourID,$IDMien,$AnhTour,$MaTour)
	{
			global $db;
        $query="UPDATE tour
		SET TenTour = :TenTour,TGTour=:TGTour,GiaTour=:GiaTour,NoiDungTour=:NoiDungTour,NgayKhoiHanh=:NgayKhoiHanh,
		IDTinhThanh=:IDTinhThanh,LoaiTourID=:LoaiTourID,IDMien=:IDMien,AnhTour=:AnhTour
		WHERE MaTour = :MaTour";
			$statement = $db->prepare($query);
        $statement->bindParam(':TenTour', $TenTour);
		$statement->bindParam(':TGTour', $TGTour);
		$statement->bindParam(':GiaTour',$GiaTour );
		$statement->bindParam(':NoiDungTour',$NoiDungTour );
		$statement->bindParam(':AnhTour',$AnhTour );
		$statement->bindParam(':NgayKhoiHanh', $NgayKhoiHanh);
		$statement->bindParam(':IDTinhThanh', $IDTinhThanh);
		$statement->bindParam(':LoaiTourID',$LoaiTourID );
		$statement->bindParam(':IDMien',$IDMien );
		$statement->bindParam(':MaTour',$MaTour );  
        $statement->execute();
        $statement-> closeCursor();   
	}	
	function Xoa_Tour($MaTour)
	{
		global $db;
		$query='Delete from tour where MaTour=:MaTour';
		$statement=$db->prepare($query);
		$statement->bindValue(':MaTour', $MaTour);
		$statement->execute();
		
		return $statement;
	}
	//danh muc
	function Them_LoaiTour($LoaiTourName){
        global $db;
        $query="INSERT INTO loaitour (LoaiTourName) 
		values (:LoaiTourName)";
		$statement = $db->prepare($query);
        $statement->bindParam(':LoaiTourName', $LoaiTourName);
		
		
		  
        $statement->execute();
        $statement-> closeCursor();         
    }
	function Sua_LoaiTour($LoaiTourName,$LoaiTourID)
	{
			global $db;
        $query="UPDATE loaitour
		SET LoaiTourName = :LoaiTourName
		WHERE LoaiTourID = :LoaiTourID";
		$statement = $db->prepare($query);
        $statement->bindParam(':LoaiTourName', $LoaiTourName);
		$statement->bindParam(':LoaiTourID', $LoaiTourID);
		
        $statement->execute();
        $statement-> closeCursor();   
	}	
	function Xoa_LoaiTour($LoaiTourID)
	{
		global $db;
		$query='Delete from loaitour where LoaiTourID=:LoaiTourID';
		$statement=$db->prepare($query);
		$statement->bindValue(':LoaiTourID', $LoaiTourID);
		$statement->execute();
		
		return $statement;
	}
	
	
	//login
	function login($UserName,$Password)
	{
		global $db;
		$query='select * from users where UserName=:UserName and Password=:Password';
		
		$statement=$db->prepare($query);
		$statement->bindValue(':UserName', $UserName);
		$statement->bindValue(':Password', $Password);
		$statement->execute();
		
		return $statement;
	
	}
?>