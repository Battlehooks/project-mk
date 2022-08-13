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
    <title>Article</title>
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
    <header class="bg-dark" style="position: relative">
      <div class="bg-dark py-4 text-light">
        <div class="container">
        <?php echo "<h1>Hi, $name</h1>" ?>
          <p class="hide-small">Padepokan SEAMEO</p>
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"> </a>
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarText"
                aria-controls="navbarText"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a
                      class="nav-link active"
                      aria-current="page"
                      href="home.php"
                      >Home</a
                    >
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
                <span class="navbar-text"
                  >Time is precious, don't waste it!</span
                >
                &ensp; &ensp;
                <span id="clock"></span>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <section style="height: 100vh; background-color: yellow">
      <div class="container" style="background-color: white; height: 100vh">
        <br />
        <article>
          <div class="row">
            <div class="col">
              <h1
                class="teks-section transition"
                style="justify-content: center; animation-delay: 0s"
              >
                TSNE
              </h1>
            </div>
          </div>
          <br />
          <div class="row">
            <div class="col">
              <p
                style="
                  text-indent: 45px;
                  text-align: justify;
                  animation-delay: 0.4s;
                "
                class="transition"
              >
                <b> TSNE (t-Distributed Stochastic Neighborhood Embedding) </b>
                adalah salah satu algoritma unsupervised learning yang berarti
                tidak membutuhkan variabel target. t-SNE memiliki prinsip yang
                sama seperti PCA. Perbedaannya adalah PCA menganalisis variabel
                berdasarkan variance mereka, TSNE memindahkan data - data yang
                berdimensi tinggi menjadi dimensi yang lebih rendah secara
                langsung.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-5">
              <br />
              <p
                style="
                  text-indent: 45px;
                  text-align: justify;
                  animation-delay: 1.2s;
                "
                class="transition"
              >
                T-SNE sangat berguna apabila kita ingin melihat data yang
                memiliki dimensi sangat tinggi (lebih dari 2 variabel). Dengan
                TSNE, kita bisa melihat bagaimana persebaran data - data
                tersebut tanpa harus mengabaikan suatu variabel yang lain.
              </p>
              <p
                style="
                  text-indent: 45px;
                  text-align: justify;
                  animation-delay: 1.2s;
                "
                class="transition"
              >
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem
                quos corrupti modi nihil voluptate quidem nesciunt esse aliquam
                unde fugit sint mollitia a, nemo molestias ratione velit
                delectus repellat quae! Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Maiores animi corporis repellat natus quod
                facere illum sint doloribus quidem perspiciatis libero, magnam
                amet quis aliquam consequuntur fuga nisi, architecto minus.
              </p>
            </div>
            <div class="col-7">
              <img src="img/TSNE.png" alt="TSNE" style="width: 100%;
              animation-delay: 0.8s" / class="transition">
            </div>
          </div>
        </article>
      </div>
    </section>
    <footer>&copy; 2022, Rizky Anugrah Ananto</footer>
  </body>
</html>
