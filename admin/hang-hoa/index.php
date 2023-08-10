<?php

require "list.php";
/*
    require_once "../../dao/pdo.php";
    require_once "../../dao/loai.php";
    require_once "../../global.php";

    extract($_REQUEST);
    if(exist_param("btn_list")){
        //viet code
        $items=hang_hoa_selectall();
        $VIEW_NAME="list.php";
    }elseif(exist_param("btn_insert"){
        //lấy dữ liệu từ form
        $ten_hh=$_POST['ten_hh'];
        $don_gia=$_POST['don_gia'];
        $giam_gia=$_POST['giam_gia'];
        $ma_loai=$_POST['ma_loai'];
        $dac_biet=$_POST['dac_biet'];
        $so_luot_xem=$_POST['so_luot_xem'];
        $mo_ta=$_POST['mo_ta'];
        $ngay_nhap=$_POST['ngay_nhap'];
        //$hinh=$_FILES['hinh']['name'];
        //upload file lên host
        $hinh=save_file($_FILES['hinh'], $UPLOAD_URL);
        //insert dữ liệu
        hang_hoa_selectall($ten_loai);
        //show dữ liệu
        $items=hang_hoa_selectall();
        $VIEW_NAME="list.php";
    }elseif(exist_param("btn_edit")){
        //lấy dữ liệu từ form
        $ma_hh=$_REQUEST['ma_hh'];
        $hang_hoa_info=hang_hoa_select_by_id($ma_hh);
        extract($hang_hoa_info);
        //show dữ liệu
        $VIEW_NAME="edit.php";
    }elseif(exist_param("btn_delete")){
        $ma_hh=$_REQUEST['ma_hh'];
        hang_hoa_delete($ma_hh);
        //hiển thị lại ds
        $items=hang_hoa_selectall();
        $VIEW_NAME="list.php";
    }elseif(exist_param("btn_update")){
        $ma_loai=$_POST['ma_loai'];
        $ten_loai=$_POST['ten_loai'];
        hang_hoa_update($ma_loai,$ten_loai);
        //hiển thị ds
        $items=hang_hoa_selectall();
        $VIEW_NAME="list.php";
    }else{
        $VIEW_NAME="add.php";
    }
    require "../layout.php";
    */
?>