<?php  
 include "config/connect.php";
?>
<?php  
if(isset($_GET['MaDH'])) {
        $id = $_GET['MaDH']; 
        $sql = "UPDATE donhang SET TinhTrang = 1 WHERE MaDonHang = '$id'"; 
        if($conn -> query($sql) ==TRUE) {
           
            header ("location:danhsachdonhang.php");
          }
}

?>