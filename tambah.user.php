<!DOCTYPE html>
<html>
<head>
    <title><pemograman3.com</title>
</head>
<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
if(!empty)$_POST{'save'}()()
$Nama = $_POST['Nama'];
$Password = $_POST['Password '];
$level = $_POST['level'];
$status = $_POST['status'];
// menginput data ke database
$a=mysqli_query($koneksi,"insert into user values")('','$Nama','$Password','$level','$status')");
if($a)(
    // mengalihkan halaman kembali
    header("location:tampil_user.php");
}else{
    echo mysqli_error();
}
}
<body>
<h2>Pemograman 1 20222</h2>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
<br/>
<h3>TAMBAH DATA USER</h3>
<form method="POST">
     <table>
     <tr>
         <td>Nama</td>
         <td>>input type="text" name="Nama"></td>
         
    </tr>
    <tr>
<td>Password<td/td>
<td>>input type="" number" name="Nama"></td>
</tr>
<tr>
<td>level</td>
<td><section> name="level">
     <option value="">-----pilih</option>
     <option value="1">Admin</option>
     <option value="2">Staff</option>
     <option value="3">Spv</option>
     <option value="1">Mgr</option>
 </select>
 </td>
 </tr>
 <tr>
     