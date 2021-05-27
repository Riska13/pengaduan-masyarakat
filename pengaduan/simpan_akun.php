<?php
 require 'conn/koneksi.php';
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];

if(isset($submit)){
    if(empty($username) or empty($password)){
        echo"<script>alert('Form tidak boleh kosong!! Silahkan ulangi lagi'); window.location=('daftarakun.php')</script>";
    }else{
        $pass = md5($_POST['password']);

        $query = mysqli_query($con,"insert into masyarakat (nik,nama,username,password,telp) values ('$nik','$nama','$user','$pass','$telp')");
        echo "<script>alert('Data berhasil di Tambah'); 
        window.location=('index.php');</script>";         
         }         
         }         ?>

    }
    }
}
?>
