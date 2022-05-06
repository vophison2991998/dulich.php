<?php

	function LoaiTour()
		{
			global $handle;
			$query='select * from loaitour';
			$statement = $handle->prepare($query);
			$statement->execute();
			return $statement;
		}
		function LoaiTour2($LoaiTourID)
		{
			global $handle;
			$query='select * from loaitour  where LoaiTourID=:LoaiTourID';
			$statement = $handle->prepare($query);
			$statement->bindValue(':LoaiTourID',$LoaiTourID);
			$statement->execute();
			return $statement;
		}

	function LoaiMien()
		{
			global $handle;
			$query='select * from mien';
			$statement = $handle->prepare($query);
			$statement->execute();
			return $statement;
		}
	function LoaiMien2($IDMien)
		{
			global $handle;
			$query='select * from mien  where IDMien=:IDMien';
			$statement = $handle->prepare($query);
			$statement->bindValue(':IDMien',$IDMien);
			$statement->execute();
			return $statement;
		}
		
	
	
	function TourBanner()
	{
		global $handle;
		$query='select * from tour,mien where tour.IDMien=mien.IDMien  order by MaTour DESC limit 4';
		$statement = $handle->prepare($query);
		
		$statement->execute();
		return $statement;
	}
	function TourTheoLoai($LoaiTourID)
	{
		global $handle;
		$query='select * from tour t inner join loaitour l
		on t.LoaiTourID=l.LoaiTourID
		inner join tinhthanh tt on tt.IDTinhThanh=t.IDTinhThanh
		inner join mien m on t.IDMien=m.IDMien
		 where t.LoaiTourID=:LoaiTourID  ';
		$statement = $handle->prepare($query);
		$statement->bindValue(':LoaiTourID',$LoaiTourID);
		$statement->execute();
		return $statement;
	}
	function BonTourTheoLoai($LoaiTourID)
	{
		global $handle;
		$query='select * from tour
		 where LoaiTourID=:LoaiTourID  order by MaTour DESC limit 4';
		$statement = $handle->prepare($query);
		$statement->bindValue(':LoaiTourID',$LoaiTourID);
		$statement->execute();
		return $statement;
	}
	function BonTourTheoMien($IDMien)
	{
		global $handle;
		$query='select * from tour
		 where IDMien=:IDMien  order by MaTour DESC limit 4';
		$statement = $handle->prepare($query);
		$statement->bindValue(':IDMien',$IDMien);
		$statement->execute();
		return $statement;
	}
	function ChiTietTour($MaTour)
	{
		global $handle;
		$query='select * from tour  where MaTour=:MaTour ';
		$statement = $handle->prepare($query);
		$statement->bindValue(':MaTour',$MaTour);
		$statement->execute();
		return $statement;
	}
	function TourTheoMien($IDMien)
	{
		global $handle;
		$query='select * from tour t inner join loaitour l
		on t.LoaiTourID=l.LoaiTourID
		inner join tinhthanh tt on tt.IDTinhThanh=t.IDTinhThanh
		inner join mien m on t.IDMien=m.IDMien
		 where t.IDMien=:IDMien  ';
		$statement = $handle->prepare($query);
		$statement->bindValue(':IDMien',$IDMien);
		$statement->execute();
		return $statement;
	}
	function Them_LH($Name,$Email,$Phone,$Address,$Title,$Content,$Time){
        global $handle;
        $query="INSERT INTO contact (Name, Email, Phone,Address,Title,Content,Time) 
		values (:Name,:Email,:Phone,:Address,:Title,:Content,:Time)";
		$statement = $handle->prepare($query);
        $statement->bindParam(':Name', $Name);
		$statement->bindParam(':Email', $Email);
		$statement->bindParam(':Phone',$Phone );
		$statement->bindParam(':Address',$Address );
		$statement->bindParam(':Title',$Title );
		$statement->bindParam(':Content',$Content );
		$statement->bindParam(':Time',$Time );
		
		  
        $statement->execute();
        $statement-> closeCursor();         
    }
?>