

<?php 

 function loadAll_binhluan(){
     $sql = "SELECT * from binhluan";   
     $danhsachbinhluan=pdo_query($sql);
     return $danhsachbinhluan;
 }
?>