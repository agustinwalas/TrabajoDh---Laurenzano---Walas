<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="estilologreg.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Registro / Rapi</title>
  </head>
  <body>
    <header>
      <div class="nav-bar">
         <div class="logo">
           <a href="TrabajoDH.php"></a>
           <img src="logo.png" alt="">
         </div>
         <div class="logoM">
           <img src="logo-mini.png" alt="">
         </div>
         <div class="nav-items">
           <ul>
             <li> <a href="login.php">Log In</a> </li>
             <li> <a href="FAQ.php">Faq</a> </li>
             <li> <a href="TrabajoDH.php">Inicio</a> </li>
           </ul>
          <div class="listacorta">
              <i style="font-size:24px" class="fa">&#xf0c9;</i>

          </div>
         </div>
      </div>
    </header>
  <div class="logeo">
    <form class=""  method="post">
    <fieldset>
       <strong><legend>Registrate</legend></strong>
       <br>
       <br>
        <p> <label class="item"> Usuario: <input class="desplegable" type="text" name="usuario"> </label> </p>
        <p> <label class="item"> Contraseña: <input class="desplegable" type="password" name="contraseña"> </label> </p>
        <p> <label class="item"> Nombre y Apellido: <input class="desplegable" type="text" name="nombre_apellido"> </label> </p>
        <p> <label class="item"> Correo Electronico: <input class="desplegable" type="email" name="mail"> </label> </p>
        <p> <label class="item"> Provincia: <select class="desplegable" name="Pq_Consulta">
             <option value="Suscripcion">Buenos Aires </option>
             <option value="Suscripcion">Catamarca </option>
             <option value="Suscripcion">Chaco </option>
             <option value="Suscripcion">Chubut </option>
             <option value="Suscripcion">Córdoba </option>
             <option value="Suscripcion">Corrientes </option>
             <option value="Suscripcion">Entre Ríos </option>
             <option value="Suscripcion">Formosa </option>
             <option value="Suscripcion">Jujuy </option>
             <option value="Suscripcion">La Pampa </option>
             <option value="Suscripcion">La Rioja </option>
             <option value="Suscripcion">Mendoza </option>
             <option value="Suscripcion">Misiones </option>
             <option value="Suscripcion">Neuquén </option>
             <option value="Suscripcion">Río Negro </option>
             <option value="Suscripcion">Salta </option>
             <option value="Suscripcion">San Juan </option>
             <option value="Suscripcion">San Luis </option>
             <option value="Suscripcion">Santa Cruz </option>
             <option value="Suscripcion">Santa Fe </option>
             <option value="Suscripcion">Santiago del Estero </option>
             <option value="Suscripcion">Tierra del Fuego </option>
             <option value="Suscripcion">Tucumán </option>

           </select>
      </label> </p>
      <p> <label class="item"> Sexo: <select class="desplegable" name="Pq_Consulta">
           <option value="Suscripcion">Masculino </option>
           <option value="Suscripcion">Femenino </option>
           <option value="Suscripcion">Otros </option>
         </select>
    </label> </p>
        <p><input class="submit" style="width:120px;height:35px" type="submit" value="ENVIAR"></p>
      </fieldset>
    </form>
    </div>





  </body>
</html>
