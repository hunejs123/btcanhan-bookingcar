<?php 
    // kết nối database
    include "connect.php";
    
    //---- tạo database ----
    // $sql = "CREATE DATABASE thuexe";
    // //---- thực thi truy vấn ----
    // if(mysqLi_query($conn, $sql)){ 
    //     echo "tạo thành công";
    // }else{
    //     echo "tạo thất bại";
    // } 
    
    // ---- tạo bảng xetulai----
    // $sql = "CREATE TABLE xetulai(
    //     id INT(11) AUTO_INCREMENT PRIMARY KEY,
    //     anh VARCHAR(255),
    //     tenxe VARCHAR(50),
    //     giathue DECIMAL(10),
    //     tinhtrang ENUM('da thue','chua thue')
    // )";
  

     
    // // ---- thực thi truy vấn----
    // if( $conn->query($sql) == TRUE){
    //     echo "tạo bảng thành công";
    // }else{
    //     echo "tạo thất bại";
    // }
    // ---- tạo bảng đăng kí----
    // $sql = "CREATE TABLE dangki(
    //     id INT AUTO_INCREMENT PRIMARY KEY,
    //     email VARCHAR(100) NOT NULL,
    //     password VARCHAR(255) NOT NULL,
    //     againpassword VARCHAR(255) NOT NULL
    // )";
  

     
    // // ---- thực thi truy vấn----
    // if( $conn->query($sql) == TRUE){
    //     echo "tạo bảng thành công";
    // }else{
    //     echo "tạo thất bại";
    // }
    // ---- tạo bảng hóa đơn----
    // $sql = "CREATE TABLE hoadon(
    //     id INT AUTO_INCREMENT PRIMARY KEY,
    //     tenxe VARCHAR(100) NOT NULL,
    //     giathue DECIMAL(10) NOT NULL, 
    //     songaythue VARCHAR(100) NOT NULL,
    //     tongtien DECIMAL(10) NOT NULL, 
    //     email VARCHAR(100) NOT NULL, 
    //     hoten VARCHAR(100) NOT NULL, 
    //     sdt VARCHAR(20) NOT NULL 
    // )";

  

     
    // // ---- thực thi truy vấn----
    // if( $conn->query($sql) == TRUE){
    //     echo "tạo bảng thành công";
    // }else{
    //     echo "tạo thất bại";
    // }

    // ---- tạo bảng đăng kí----
    // $sql = "CREATE TABLE dangnhapadmin(
    //     id INT AUTO_INCREMENT PRIMARY KEY,
    //     email VARCHAR(100) NOT NULL,
    //     password VARCHAR(255) NOT NULL
    // )";
  

     
    // // ---- thực thi truy vấn----
    // if( $conn->query($sql) == TRUE){
    //     echo "tạo bảng thành công";
    // }else{
    //     echo "tạo thất bại";
    // }
    // ---- tạo bảng xetulai----
    // $sql = "CREATE TABLE xegiamgia(
    //     id INT(11) AUTO_INCREMENT PRIMARY KEY,
    //     anh VARCHAR(255),
    //     tenxe VARCHAR(50),
    //     giathue DECIMAL(10),
    //     tinhtrang ENUM('da thue','chua thue')
    // )";
  

     
    // // ---- thực thi truy vấn----
    // if( $conn->query($sql) == TRUE){
    //     echo "tạo bảng thành công";
    // }else{
    //     echo "tạo thất bại";
    // }
    // ---- tạo bảng xetulai----
    $sql = "CREATE TABLE xecotaixe(
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        anh VARCHAR(255),
        tenxe VARCHAR(50),
        giathue DECIMAL(10),
        tinhtrang ENUM('da thue','chua thue')
    )";
  

     
    // ---- thực thi truy vấn----
    if( $conn->query($sql) == TRUE){
        echo "tạo bảng thành công";
    }else{
        echo "tạo thất bại";
    }
?>