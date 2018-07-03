

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <link rel="stylesheet" href="css/estilonue.css">
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
            <?php if (!$repositorio->estaLogueado()) {?>
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
<div class="todo">

<form class="producto" method="post">
  <h1>Vende Rapido, Seguro y Facil!!</h1>
  <div>
    <h3>Elegi un titulo para tu auto</h3>
    <label>Titulo:</label>
    <input class="title "type="text" name="title" >
  </div>
  <div>
    <h3>Elegi el vehiculo que vas a vender</h3>
    <label class="form-group">Marca:</label>
    <select class="form-group" name="marca">
    <option value="">Elegí tu marca</option>
<?php foreach ($marcas as $value): ?>
    <?php if ($marca == $value): ?>
        <option selected value="<?=$value?>"><?=$value?></option>
    <?php continue;
            endif; ?>
    <option value="<?=$value?>"><?=$value?></option>
<?php endforeach; ?>
    </select>
  </div>
  <div>
    <label>Modelo:</label>
    <select class="form-group" name="modelo">
    <option value="">Elegí tu modelo</option>
<?php foreach ($modelos as $value): ?>
    <?php if ($modelo == $value): ?>
        <option selected value="<?=$value?>"><?=$value?></option>
    <?php continue;
            endif; ?>
    <option value="<?=$value?>"><?=$value?></option>
<?php endforeach; ?>
    </select>
  </div>
  <div>
    <label class="form-group">Estado:</label>
    <select class="" name="estado">
    <option value="">Nuevo</option>
    <option value="">Usado</option>

    </select>
  </div>
  <div>
    <label class="form-group, precio">Precio:</label>
    <input class="precio" type="text" name="precio" >
  </div>
  <div>
    <input type="file" name="auto" value="">

  </div>
    <button type="submit" class="btn btn-success">Confirmar</button>
</form>

</div>


    <body>
</html>
