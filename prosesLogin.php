<?php
    session_start();
    require_once "koneksi.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $status = 0;

    $sqlSelect = mysqli_query($koneksi, "SELECT * FROM admin WHERE username_admin = '$username' AND password ='$password'");
    $baris = mysqli_num_rows($sqlSelect);
    if($baris == 1){
      $_SESSION['user'] = $username;
      $_SESSION['status'] = "admin";
      header("Location:beranda_admin.php");

    //       while ($do = mysqli_fetch_assoc($sqlSelect)) {
    //         $status = $do['status'];
    //       }
    //       if($status == 1){
    //       $_SESSION['user'] = $username;
    //       $_SESSION['status'] = "admin";
    //       header("Location:beranda_admin.php");
    //       }else{
    //         echo "ini untuk beranda user";
    //       }
    }else{
  

     }
?>