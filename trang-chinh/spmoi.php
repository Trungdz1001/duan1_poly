<?php

$ds_hang_hoa=hang_hoa_selectall();
?>
<h3 class="sub-heading"> Sản phầm </h3>
    <h1 class="heading"> Nổi bật </h1>

    <div class="box-container">
    <?php
                foreach($ds_hang_hoa as $hang_hoa){
                    extract($hang_hoa);
                    if($dac_biet=="113"){

                    
            ?>
        <div class="box">
            
            <div class="fas fa-heart"></div>
            <div class="fas fa-eye"></div>
            <div>
            <a href="trangcon/sp1.php?ma_hh=<?php echo $ma_hh ?>">
            <?php
                    $ds_img=anh_hh($ma_hh);
                    foreach($ds_img as $img){
                      extract($img);
                      echo '<img src="images/'.$link_img.'">';
                    }
                      
                  ?>
            </div>
            <a href="trangcon/sp1.php?ma_hh=<?php echo $ma_hh ?>"><h3><?php echo $ten_hh?></h3></a>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                
            </div>
            <span><?php echo number_format($don_gia).'đ'?></span>
            <a href="trangcon/sp1.php?ma_hh=<?php echo $ma_hh ?>" class="btn">Chi Tiết</a>
        </div>
       
                    <?php }
                } ?>
    </div>  