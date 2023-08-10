<?php
//Kết nối pdo
function pdo_get_connection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    try{
        $conn = new PDO("mysql:host=$servername;dbname=hlvstore", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "lỗi kết nối" . $e->getMessage();
    }
}
    
    //sql
    //sql,...,id
    //"insert into loai(ten_loai) values(?)","laptop"
    //"update loai set ten_loai=? where ma_loai=?","laptop", "1"
    //"delete from loai where ma_loai=?", "1"

    // Thực thi câu lệnh INSERT, UPDATE, DELETE
    function pdo_execute($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt -> execute($sql_args);
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }
       //array_slice(func_get_args(), 1) 

       //truy vấn nhiều dữ liệu
    function pdo_query($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $rows = $stmt->fetchAll();
            return $rows;
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }
        //$stmt->fetchAll()

    // Truy vấn 1 dữ liệu
    function pdo_query_one($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
        }
        catch(PDOException $e){
        throw $e;
        }
        finally{
        unset($conn);
        }
       }
    //$stmt->fetch(PDO::FETCH_ASSOC)

    // Truy vấn 1 giá trị
    function pdo_query_value($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return array_values($row)[0];
        }
        catch(PDOException $e){
        throw $e;
        }
        finally{
        unset($conn);
        }
       }
    //array_values($row)[0]

?>