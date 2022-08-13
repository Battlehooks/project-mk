<?php
$error = 0;
session_start();
if (isset($_SESSION['user'])) {
  header('location:home.php');
}
if (isset($_POST['user'])) {
  include 'koneksi.php';
  $user = mysqli_real_escape_string($connect, $_POST['user']);
  $pass = mysqli_real_escape_string($connect, $_POST['pass']);

  $sql = "SELECT * FROM login WHERE user='$user'";
  $hasil = mysqli_query($connect, $sql);
  $rows = mysqli_num_rows($hasil);
  $row = 1;

  if ($rows > 0) {
    while ($a = mysqli_fetch_assoc($hasil)) {
      if (password_verify($pass, $a['pass'])) {
        $row = $row + 1;
      }
    }
    if ($row > 0) {
      session_start();
      $_SESSION['user'] = $user;
      header('location:home.php');
    }
    $error = 1;
  }
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="css/screen.css" />
    <section style="height: 100vh; background-color: yellow">
      <div class="box-center">
        <h1 class="transition" style="animation-delay: 0.01s">Login</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <div class="label-form">
            <label for="user" id="user-label">Username :</label><br>
            <input type="text" id="user" name="user" />
          </div>
          <br><br><br>
          <div class="label-form">
            <label for="pass" id="pass-label">Password :</label><br>
            <input type="password" id="pass" name="pass" />
          </div>
          <div>
            <p style="position: absolute; color:red;">
              <?php
                if ($error == 1) {
                  echo "Username atau Password anda Salah!!!";
                }
              ?>
            </p>
          </div>
          <br><br>
          <div class="centering div-button">
            <button type="submit" name="submit" id="submit" class="btn" style="position: absolute; transform: translate(0%, 25%)">SUBMIT</button>
          </div>
        </form>
        <div class="centering">
          <p style="position: absolute; bottom: -8px;">Belum punya akun? Daftar di&nbsp;<a href="registrasi.php">sini</a></p>
        </div>
      </div>
    </section>
  </body>
</html>
