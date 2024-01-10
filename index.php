<?php
include 'config.php';

$query = "SELECT * FROM products";
$result = $conn->query($query);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Online Shop Catalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom mb-5">
        <div class="container-lg">
          <a class="navbar-brand fs-2" href="#">Bing Collection</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav fs-5">
              <li class="nav-item">
                <a class="nav-link" href="#profile">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#katalog">Katalog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#login">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
    <!-- Profile Section -->
    <section id="profile" class="container my-5">
        <div class="container-lg row align-items-center">
            <div class="col-lg-7 text-center mb-4" >
                <div class="">
                    <img class="rounded border border-2 img-fluid"
                    src="pics/486c4b21c5563e403092319563732a9c.jpg"
                    alt="">
                </div>
                
            </div>
            <div class="col-lg-5">
                <h1>
                    Bing Collection
                </h1>
                <p>"Bing Collection" adalah jawaban bagi mereka yang mencari gaya yang tak hanya tentang pakaian, tapi
                    juga tentang pernyataan dan percaya diri. Kami percaya bahwa gaya bukan hanya mengenai penampilan
                    luar, tetapi juga bagaimana penampilan itu membuat Anda merasa di dalam. Kami berkomitmen untuk
                    menciptakan pakaian yang tak hanya memenuhi kebutuhan gaya, tetapi juga meningkatkan kepercayaan
                    diri Anda.</p>
                <div>
                    <h4>Contact</h4>
                    <p><i class="fab mx-2 fa-facebook-square"></i>bing.store</p>
                    <p><i class="fab mx-2 fa-instagram-square"></i>bing.store</p>
                    <p><i class="fab mx-2 fa-shopify"></i>bing.store</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Catalog Section -->
    <!-- Catalog Section -->
<section id="katalog" class="container my-5 pb-5 text-center">
    <div class="container-lg">
        <h2 class="my-5 py-5">Bing Collection Katalog</h2>
        <div class="row">

            <?php
            while ($row = $result->fetch_assoc()) {
                echo '<div class="col-lg-3 col-md-6 mb-4">';
                echo '<div class="card mx-3">';
                echo '<img src="pics/' . $row["image"] . '" alt="' . $row["name"] . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $row["name"] . '</h5>';
                echo '<p class="card-text">' . $row["description"] . '</p>';
                echo '<p class="card-text">$' . $row["price"] . '</p>';
                echo '</div></div></div>';
            }
            ?>
            
        </div>
    </div>
</section>


    <!-- Login Form Section -->
    <section id="login" class="container my-5">
        <div class="container-md bg-dark text-light py-5 px-5 w-75 rounded">
            <h2>Login</h2>
            <form class="">
                <div class="form-group my-2">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter username">
                </div>
                <div class="form-group my-2">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-dark border-light my-3">Login</button>
                <button type="submit" class="btn btn-dark border-light my-3">Sign Up</button>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>
<?php
$conn->close();
?>