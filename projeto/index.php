<?php

include("menu.html");

?>


<body>

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img1.jpeg" class="d-block w-100" alt="imagem 1">
    </div>
    <div class="carousel-item">
      <img src="img2.jpg" class="d-block w-100" alt="imagem 2">
    </div>
    <div class="carousel-item">
      <img src="img3.jpg" class="d-block w-100" alt="imagem 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</body>

</html>