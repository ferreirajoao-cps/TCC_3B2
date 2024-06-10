<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estilo2.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="favicon.ico">
    <title>BiodexJr</title>
</head>
<body>
    <header>
        <nav>
            <div class="w3-bar" style="background-color:  #009688;;">
                <button class="w3-button  w3-xlarge bl-hover" onclick="w3_open()"
                    style="color: rgb(169, 227, 160);"><img src="./img/logo/Logotipo.jpg" alt="Logo Menu" width="50"
                        height="50"></button>
            </div>
        </nav>
    </header>
    <main>
        <!--Menu Sidebar-->
        <section>
            <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
                <button onclick="w3_close() " class="w3-bar-item w3-large">Close &times;</button>
                <a href="./home.html" class="w3-bar-item w3-button">Home</a>
                <a href="#" class="w3-bar-item w3-button">Login</a>
                <a href="#" class="w3-bar-item w3-button">favoritos</a>

            </div>
        </section>
        <!--Slide Show Hero-->
        <section>
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img class="gp-img-slide" src="./imgT/carrosel1.jpg" style="width: 100%;">
                    <div class="text">Biologia</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img class="gp-img-slide" src="./imgT/carrosel2.jpg" style="width:100%">
                    <div class="text">Evolução Biológica</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img class="gp-img-slide" src="./imgT/carrosel3.jpg" style="width:100%">
                    <div class="text">Evolução</div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

            </div>
        </section>
        <!--Cards Hero-->
        <section class="gp-section-home">
            <div class="w3-card-4 w3-white gp-card-home gp-espaco">
                <img class="gp-img-home" src="./img/quadrado/ReinoAnimal.jpg" alt="reinoanimal">
                <div class="w3-container w3-center">
                    <a href="animalia.php">
                        <p>Reino Animalia</p>
                    </a>
                </div>
            </div>

            <div class="w3-card-4 w3-white gp-card-home gp-espaco">
                <img class="gp-img-home" src="./img/quadrado/ReinoPlantae.jpg" alt="reinoplantae">
                <div class="w3-container w3-center">
                    <a href="reinoplantae.html">
                        <p>Reino Plantae</p>
                    </a>
                </div>
            </div>

            <div class="w3-card-4 w3-white gp-card-home gp-espaco">
                <img class="gp-img-home" src="./img/quadrado/ReinoMonera.jpg" alt="reinomonera">
                <div class="w3-container w3-center">
                    <a href="reinomonera.html">
                        <p>Reino Monera</p>
                    </a>
                </div>
        </section>
        <section class="gp-section-home">
            <div class="w3-card-4 w3-white gp-card-home gp-espaco">
                <img class="gp-img-home" src="./img/quadrado/ReinoFungi.jpg" alt="reinofungi">
                <div class="w3-container w3-center">
                    <a href="reinofungi.html">
                        <p>Reino Fungi</p>
                    </a>
                </div>
            </div>

            <div class="w3-card-4 w3-white gp-card-home gp-espaco">
                <img class="gp-img-home" src="./img/quadrado/ReinoProtista.jpg" alt="reinoprotista">
                <div class="w3-container w3-center">
                    <a href="reinoprotista.html">
                        <p>Reino Protista</p>
                    </a>
                </div>
            </div>

        </section>
    </main>
    <footer>
        <script>
            let slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                if (n > slides.length) { slideIndex = 1 }
                if (n < 1) { slideIndex = slides.length }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
            }

            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
            }
        </script>
    </footer>
</body>
</html>