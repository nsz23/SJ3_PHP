<?php include 'partials/header.php'; ?>

<!-- Slideshow / Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./img/slideshow-1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./img/slideshow-2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./img/slideshow-33.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  

    <!-- cookies lišta -->
    <div class="cookie-consent-modal">
      <div class="content">
        <h1>Používame cookies</h1>
        <p>Súbory cookie a ďalšie technológie sledovania používame na zlepšenie vášho zážitku z prehliadania našich webových stránok, 
          na to, aby sme vám zobrazovali prispôsobený obsah a cielené reklamy, na analýzu návštevnosti našich webových stránok a na 
          pochopenie toho, odkiaľ naši návštevníci prichádzajú.</p>
        <div class="btns">
          <button class="btn cancel">Odmietam</button>
          <button class="btn accept">Súhlasím</button>
        </div>
      </div>
    </div>
    <script src="./js/app.js"></script>

    <?php include 'partials/footer.php'; ?>
  

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>