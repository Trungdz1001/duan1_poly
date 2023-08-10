<?php
require "../../dao/pdo.php";
require "../../dao/binh-luan.php";  
require "../../dao/thong-ke.php";
    
    //xóa
    if(isset($_GET['ma_bl'])){
        $ma_bl=$_GET['ma_bl'];
        binh_luan_delete($ma_bl);
    }

    //load lại ds 
    if(isset($_GET['ma_bl'])){
        $ds_binh_luan = binh_luan_select_by_id($ma_bl);
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../content/css/bootstrap.css">
</head>
<body>
<div class="container">
        <header>
            <h1 class="alert alert-success">XSHOP</h1>
        </header>
        <nav class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active hover" aria-current="page" href="../loai-hang/">Loại hàng</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active hover" aria-current="page" href="../hang-hoa/">Hàng hóa</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active hover" aria-current="page" href="../khach-hang/">Khách hàng</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active hover" aria-current="page" href="../binh-luan/">Bình luận</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active hover" aria-current="page" href="../thong-ke/">Thống kê</a>
                      </li>
                    </ul>
                </div>
            </nav>
        </nav>
        
      
           
            <?php
                foreach($ds_binh_luan as $binh_luan){
                    extract($binh_luan);
                    $del_link="detail.php?ma_bl=".$ma_bl;
            ?>
            <tbody>
                <tr>
                <th scope="row"><input type="checkbox"></th>
                <td><?php echo $noi_dung?></td>
                <td><?php echo $ma_hh?></td>
                <td><?php echo $ma_kh?></td>
                <td><?php echo $ma_hd?></td>
                <td><?php echo $ngay_bl?></td>
                <td><?php echo $trang_thai?></td>
                <td>
                <a href="<?php echo $del_link?>"><input type="submit" value="Xóa"></a>
                </td>
                </tr>
            </tbody>
            <?php
                }
            ?>
        </table>
    </div>
</body>
</html>
<?php
    }
    ?>