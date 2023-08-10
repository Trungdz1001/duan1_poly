<?php
    //require "../dao/pdo.php";
    //require "../dao/hang-hoa.php";
    //require "../dao/img.php";
    $ds_hang_hoa=hang_hoa_selectall();
?>
<h3 class="sub-heading"> Sản phẩm </h3>
    <h1 class="heading"> Tất cả sản phẩm của Store</h1>
    
    <div class="box-container">
        
    <?php
                foreach($ds_hang_hoa as $hang_hoa){
                    extract($hang_hoa);
            ?>
        <div class="box">
            <div class="image">
            
            <a href="trangcon/sp1.php?ma_hh=<?php echo $ma_hh ?>">
            <?php
                    $ds_img=anh_hh($ma_hh);
                    foreach($ds_img as $img){
                      extract($img);
                      echo '<td><img src="images/'.$link_img.'"></td>';
                    }
                      
                  ?></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <a href="trangcon/sp1.php?ma_hh=<?php echo $ma_hh ?>"><h3><?php echo $ten_hh?></h3></a>
                <p>Sản phẩm đến từ những thương hiệu nổi tiếng với chất liệu coton 100%, hình in chất lượng...</p>
                <a href="trangcon/sp1.php?ma_hh=<?php echo $ma_hh ?>" class="btn">Chi Tiết</a>
                <span class="price"><?php echo number_format($don_gia).'đ'?></span>
            </div>
        </div>

                    <?php } ?>
    </div>