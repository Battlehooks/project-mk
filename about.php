<?php 
session_start();
if (!isset($_SESSION['user'])) {
  header('location:index.php');
}
$name = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>About</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/screen.css" />
  </head>
  <!-- CSS only -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
    crossorigin="anonymous"
  />
  <script src="js/clock.js"></script>

  <body onload="startTime()">
    <header class="bg-dark" style="position: relative;">
      <div
        class="bg-dark py-4 text-light"
        style="position: relative; width: 100%; top: 0; left: 0; right: 0"
      >
        <div class="container">
          <?php echo "<h1>Hi, $name</h1>" ?>
          <p class="hide-small">Padepokan SEAMEO</p>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"> </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="about.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="article.php">Article</a>
                  </li>
                  <li class="nav-item">
                    <a href="logout.php" class="nav-link">Logout</a>
                  </li>
                </ul>
                <span class="navbar-text">Time is precious, don't waste it!</span> &ensp;
                <span id="clock">
                </span>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <section style="height: 100vh; background-color: yellow">
      <div class="row div-in-section">
        <div class="col-3">
          <img src="img/myPhoto.jpeg" alt="Rizky Anugrah Ananto" style="border-radius: 15%; width: 100%; padding-top: 5px; border-top: 3px solid black; border-bottom: 3px solid black; border-left: 3px solid black; border-right: 3px solid black; margin: 10px 10px;">
        </div>
        <div class="col-4">
          <h1 class="abt">About_me</h2>
          <h2 class="teks-section transition">Rizky Anugrah Ananto</h1>
          <h4 class="teks-section transition" style="animation-delay: 0.8s;">TTL : Semarang, 21 Maret 2005</h4>
          <h4 class="teks-section transition" style="animation-delay: 1.2s;">Institusi : SMKN 7 Semarang | Padepokan SEAMEO</h4>
          <h4 class="teks-section transition" style="animation-delay: 1.6s;">Hobi : Main Game | Ngoding</h4>
          <h5 class="teks-section transition" style="animation-delay: 2s;">Rewind is what I want</h5>
          <br>
        </div>
      </div>
    </section>
</html>
