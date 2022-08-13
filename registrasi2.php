<?php
if (isset($_POST)) {
  include 'koneksi.php';
  $user = mysqli_real_escape_string($connect, $_POST['user']);
  $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

  $sql = "INSERT INTO login (user, pass) values ('$user', '$pass')";
  $hasil = mysqli_query($connect, $sql);

  if ($hasil) {
    echo "<script>alert('Registrasi Berhasil!')</script>";
  } else {
    echo "<script>alert('Registrasi Gagal!')</script>";
  }
}
header('location: index.php');
?>