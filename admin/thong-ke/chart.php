<?php
require "../../dao/pdo.php";
require "../../dao/thong-ke.php";
require "../../dao/hang-hoa.php";
    
    //load lại ds 
    $ds_thong_ke=thong_ke_hang_hoa();

    //piechart: https://developers.google.com/chart/interactive/docs/gallery/piechart
    /*<?php
                //$ds_thong_ke=thong_ke_hang_hoa();
                foreach($ds_thong_ke as $thong_ke){
                    echo "['$thong_ke[ten_loai]',       $thong_ke[so_luong]].";
                }
        ?>
    */

    /*  ['Task', 'Hours per Day'],
                ['Work',     11],
                ['Eat',      2],
                ['Commute',  2],
                ['Watch TV', 2],
                ['Sleep',    7]
                foreach($ds_thong_ke as $thong_ke){
                    extract($thong_ke);
                    echo "['$ten_loai',       $so_luong]";
                }*/
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
        
        <h2 class="alert text-center">QUẢN TRỊ WEBSITE</h2>
        <h3 class="alert alert-success">QUẢN LÝ THỐNG KÊ</h3>
        
        
        <head>
            <div id="piechart" style="width: 900px; height: 500px;"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                    <?php?>
                ['Task', 'Hours per Day'],
                ['Work',     11],
                ['Eat',      2],
                ['Commute',  2],
                ['Watch TV', 2],
                ['Sleep',    7]
                ]);

                var options = {
                title: 'My Daily Activities'
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                chart.draw(data, options);
            }
            </script>
        </head>
</div>
</body>
</html>