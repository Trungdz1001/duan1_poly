
<?php
if (!isset($_SESSION['user'])) {
    require_once("../trangcon/dang-nhap-form.php");
} else {
    require_once("../trangcon/dang-nhap-info.php");
}
    ?>