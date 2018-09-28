<section id="home">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <img src="img/logo.png" alt="">
      </div>
      <div class="col-12">
        <h1 class="">PROYECTO-X</h1>
      </div>
      <div class="col-12">
        <h5 class="">Compra de insumos de PC</h5>
      </div>
    </div>
  </div>
</section>

<section id="destacados">
  <div class="container">
    <h2 class="text-center">Productos Destacados</h2>
    <div class="row">
    <?php
    foreach($destacados as $destacado) { ?>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card my-3">
          <a href="<?php echo APP_URL . 'producto.php?id_producto=' . $destacado['id_producto'] ?>"><img class="card-img-top" src="<?php echo $destacado['img_chica'] ?>" alt="Card image cap"></a>
          <div class="card-body">
            <a href="<?php echo APP_URL . 'producto.php?id_producto=' . $destacado['id_producto'] ?>"><h4 class="card-title"><?php echo $destacado['nombre'] ?></h4></a>
            <p class="card-text"><?php echo $destacado['descr_corta'] ?></p>
            <h5>$<?php echo $destacado['precio'] ?>.-</h5>
            <a href="#" class="btn">Comprar</a>
          </div>
        </div>
      </div>

    <?php } ?>
    </div>
  </div>
</section>
