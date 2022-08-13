<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <?php
session_start();
if (isset($_SESSION['user'])) {
  header('location:home.php');
}
if (isset($_POST['user'])) {
  include 'koneksi.php';
  $user = mysqli_real_escape_string($connect, $_POST['user']);
  $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

  $sql = "INSERT INTO login (user, pass) values ('$user', '$pass')";
  $hasil = mysqli_query($connect, $sql);
}
?>
  <body>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="css/screen.css" />
    <section style="height: 100vh; background-color: yellow;">
      <div class="box-center">
        <h1 class="transition" style="animation-delay: 0.01s;">Registrasi</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <div>
            <label for="user" id="user-label">Username :</label><br>
            <input type="text" id="user" name="user" />
          </div>
          <br><br><br>
          <div>
            <label for="pass" id="pass-label">Password :</label>
            <input type="password" id="pass" name="pass" />
          </div>
          <br><br><br>
          <div class="centering" style="padding-bottom: 50px;">
            <button type="submit" name="submit" id="submit" class="btn" style="position: absolute; transform: translate(0%, 25%)">REGISTRASI</button>
          </div>
          <div class="centering">
              <?php 
                if (isset($hasil)) {
                if ($hasil) {
                  echo "<p style='position: absolute; transform: translate(0, 50%); font-size: 12px; text-align: center; color: green'>Registrasi Berhasil, silahkan menuju laman <a href='index.php'>login</a> untuk mendaftar melalui laman tersebut.</p>";
                  } 
                else {
                  echo "<p style='position: absolute; transform: translate(0, 50%); font-size: 12px; text-align: center; color: red'>Registrasi Gagal.</p>";
                }
              }
              ?>
          </div>
        </form>
        <div class="centering">
          <p style="position: absolute; transform: translate(0, 70%)">Sudah punya akun? Login di&nbsp;<a href="index.php">sini</a></p>
        </div>
      </div>
    </section>
  </body>
</html>
