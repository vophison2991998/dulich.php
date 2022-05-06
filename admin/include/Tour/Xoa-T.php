<?php
$MaTour=$_GET['MaTour'];
Xoa_Tour($MaTour);
echo"<script>window.location='index.php?page=QL-T'</script>";
?>