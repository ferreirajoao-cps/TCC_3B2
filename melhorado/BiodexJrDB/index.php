<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>BioDex jr</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="../img/logo/Logotipo.jpg" alt="" id="logoinicio">
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Home</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Login</a></li>
              <li><a class="dropdown-item" href="#">Favoritos</a></li>
            </ul>
          </li>
        </ul>
      </div>
      </div>
    </nav>
  </header>
  <main>
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/banner/BannerGoodPay2.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Biologia</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/banner/BannerGoodPay.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Evolução Biológica</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/banner/BannerGoodPay6assinatura.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Evolução</h5>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
    <section>

    </section>
    <!--Cards Hero-->

    <div id="cardgroup" class="row row-cols-1 row-cols-md-3 g-4">
      <div class="card" style="width: 18rem;">
        <img src="./img/bannersReinos/animal.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Reino Animalia</h5>
          <p class="card-text">São os animais, como peixes, aves e mamíferos.</p>
          <a href="animalia.php" class="btn btn-success">Ver Mais</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="./img/bannersReinos/plantae.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Reino Plantae</h5>
          <p class="card-text">Inclui plantas, como árvores e flores.</p>
          <a href="plantae.php" class="btn btn-success">Ver Mais</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="./img/bannersReinos/monera.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Reino Monera</h5>
          <p class="card-text">Composto por bactérias e algas azuis.</p>
          <a href="reinomonera.html" class="btn btn-success">Ver Mais</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="../img/quadrado/ReinoFungi.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Reino Fungi</h5>
          <p class="card-text">Aqui estão os fungos, como cogumelos.</p>
          <a href="reinofungi.html" class="btn btn-success">Ver Mais</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="../img/quadrado/ReinoProtista.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Reino Protista</h5>
          <p class="card-text">São organismos unicelulares, como algas e protozoários.</p>
          <a href="reinoprotista.html" class="btn btn-success">Ver Mais</a>
        </div>
      </div>
    </div>
  </main>
  <footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </footer>
</body>

</html>