

<!-- {Hubo un problema con el pusheo al git, pensamos que se habia mandado, comenzando el sprint 3 nos dimos cuenta que no se habia pusheado, disculpen las molestias} -->


<?php require_once('funciones.php') ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/estiloind.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Rapi Auto</title>
  </head>
  <body>
    <header>
      <div class="nav-bar">
         <div class="logo">
           <a href="index.php"><img src="diseño/logo.png"></a>
         </div>
         <div class="logoM">
           <a href="index.php"><img src="diseño/logo-mini.png"></a>
         </div>
         <div class="searchbar">
       <input class="barra"type="text" placeholder="     buscar..">
       <img src="diseño/zoom1.png" alt="">
     </div>
         <div class="nav-items">
            <?php if (!estaLogueado()) {?>
              <ul class="nav-ul">
               <li> <a href="login.php">Login</a> </li>
               <li> <a href="register.php">Registrate</a> </li>

             </ul>
           <?php }
            ?>

          <div class="listacorta">
              <i style="font-size:24px" class="fa">&#xf0c9;</i>
          </div>
         </div>
      </div>
    </header>
    <div class="autos">
        <div class="auto">
          <div class="imagen">
            <img src="autos/bmw.jpg">
          </div>
        <h3>BMW serie 3 2010   </h3>
        <ul class="datos-secundarios">
          <li>124 000km</li>
          <li>370 000 $</li>
          <li>Usado</li>
        </ul>
        <div class="banderin">

        </div>
      </div>

      <div class="auto">
        <div class="imagen">
          <img src="autos/audia4.jpg">
        </div>
        <h3>Audi s4 2005</h3>
        <ul class="datos-secundarios">
          <li>114 000km</li>
          <li>209 000 $</li>
          <li>Usado</li>
        <div class="banderin">
<img src="oferta.png" alt="">
        </div>
      </div>
      <div class="auto">
        <div class="imagen">
          <img src="autos/ka.jpg">
        </div>
        <h3>Ford Ka 1997</h3>
        <ul class="datos-secundarios">
          <li>324 000km</li>
          <li>59 000 $</li>
          <li>Usado</li>
        <div class="banderin">
<img src="diseño/oferta2.png" alt="">
        </div>
      </div>

      <div class="auto">
        <div class="imagen">
          <img src="autos/ecosport.jpg">
        </div>
        <h3>Ford Ecosport 2008</h3>
        <ul class="datos-secundarios">
          <li>152 000km</li>
          <li>140 000 $</li>
          <li>Usado</li>
        <div class="banderin">

        </div>
      </div>
      <div class="auto">
        <div class="imagen">
          <img src="autos/peugeot408.jpg">
        </div>
        <h3>Peugeot 408</h3>
        <ul class="datos-secundarios">
          <li>184 000km</li>
          <li>269 000 $</li>
          <li>Usado</li>
        <div class="banderin">

        </div>
      </div>

      <div class="auto">
        <div class="imagen">
          <img src="autos/onix.png">
        </div>
        <h3>Chevrolet Onix 2018</h3>
        <ul class="datos-secundarios">
          <li>0km</li>
          <li>269 000 $</li>
          <li>Nuevo</li>
        <div class="banderin">
          <img src="diseño/new.png" alt="">
        </div>
      </div>
      <div class="auto">
        <div class="imagen">
          <img src="autos/gol.jpg">
        </div>
        <h3>Volkswagen gol 2008</h3>
        <ul class="datos-secundarios">
          <li>144 000km</li>
          <li>149 000 $</li>

        <div class="banderin">

        </div>
      </div>
      <div class="auto">
        <div class="imagen">
          <img src="autos/images.jpg">
        </div>
        <h3>Chevrolet Aveo</h3>
        <ul class="datos-secundarios">
          <li>0km</li>
          <li>369 000 $</li>
        <div class="banderin">
          <img src="new.png" alt="">
        </div>
      </div>
      <div class="auto">
        <div class="imagen">
          <img src="autos/serie1.jpg">
        </div>
        <h3>BMW Serie 1</h3>
        <ul class="datos-secundarios">
          <li>184 000km</li>
          <li>269 000 $</li>
          <li>Usado</li>
        <div class="banderin">
            <img src="diseño/oferta2.png" alt="">
        </div>
      </div>
    </div>

    <ul class="pagination">
      <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
    </ul>


    <footer class="final">
    <a href="logout.php">Cerrar Sesion</a>
    <a href="FAQ.php">Preguntas Frecuentes</a>
    </footer>
  </body>
</html>
