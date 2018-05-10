<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Formulario</title>
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="style_form.css">
  </head>
  <?php require_once('header.php'); ?>
  <body>
    <div class="cubo"><h3>
      <strong>¡Registrate!</strong>
    </h3>
    <br>
    <form class="todo" action="" method="post">

    <fieldset class="fondo">
      <h1 class="titulo">Datos personales</h1>
      <hr>
      <br>
      <input class="nombre" type="text" name="nombre" required placeholder="Nombre y Apellido"><label class="requerido">*</label>
      <br>
      <br>
      <label>Fecha de Nacimiento</label>

      <br>
        <select class="Dia" name="Dia">
          <option value="1">Dia</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6</option>
          <option>7</option>
          <option>8</option>
          <option>9</option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
          <option>13</option>
          <option>14</option>
          <option>15</option>
          <option>16</option>
          <option>17</option>
          <option>18</option>
          <option>19</option>
          <option>20</option>
          <option>21</option>
          <option>22</option>
          <option>23</option>
          <option>24</option>
          <option>25</option>
          <option>26</option>
          <option>27</option>
          <option>28</option>
          <option>29</option>
          <option>30</option>
          <option>31</option>
        </select>

      <select class="mes" name="Mes">
        <option value="2">Mes</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
      </select>

        <input class="año"type="text" name="año" placeholder="Año"><label class="requerido">*</label>
        <br>
        <br>
          <input class="profesion" type="text" name="Profesion" placeholder="Profesión"><label class="requerido">*</label>
          <br>
          <br>
        <input class="email" type="email" required placeholder="Usuario@email.com" ><label class="requerido">*</label>
        <br>
        <br>
            <input class="contraseña" type="password" required name="pass" placeholder="Password"><label class="requerido">*</label>
          <br>
          <br>
            <input class="contraseña" type="password" required name="pass" placeholder="Repetir password" ><label class="requerido">*</label>
            <br>
            <br>
          <label>Estado Civil</label>
          <br><br>
          <input type="radio" name="estado_civil"><label class="radio">Soltero</label>
          <input type="radio" name="estado_civil"><label class="radio">Casado</label>
          <input type="radio" name="estado_civil"><label class="radio">Viudo</label>
        <br>
        <br>
        <label>Género</label>
        <br><br>
          <input type="radio" name="Genero"><label class="radio">Masculino</label>
          <input type="radio" name="Genero"><label class="radio">Femenino</label>
          <input type="radio" name="Genero"><label class="radio">Otro</label>
          <br>
          <br>
<label class="requerido">* Campo requerido</label>
      </fieldset>
      <br>


    <fieldset class="caja2">
      <h1 class="titulo">Datos del Domicilio</h1>
      <hr>
      <br>
        <select class="Pais" name="Pais">
          <option value="">Seleccione un pais</option>
          <option>Argentina</option>
          <option>Brasil</option>
          <option>Colombia</option>
          <option>Dinamarca</option>
          <option>España</option>
          <option>Finlandia</option>

        </select>
      <br>
      <br>
      <p>
        <select class="provincia" name="provincia">
          <option value="">Seleccione una Provincia</option>
          <option>Buenos Aires</option>
          <option>Santa Fe</option>
          <option>Catamarca</option>
          <option>Corrientes</option>
          <option>Entre Rios</option>
          <option>Santiago del Estero</option>
          <option>Santa Cruz</option>
        </select>
      <br>
      <br>
        <select class="ciudad" name="ciudad">
          <option value="">Seleccione una Ciudad</option>
          <option>Capital Federal</option>
          <option>Gran Buenos Aires</option>
          <option>Moron</option>
          <option>Haedo</option>
          <option>Gregorio de Laferrere</option>
          <option>San Justo</option>
          <option>Ciudad Evita</option>
        </select>
      <br>
      <br>
        <input class="dir" type="text" name="Direccion" required placeholder="Calle" ><label class="requerido">*</label>
        <input class="nro" type="text" name="Direccion" required placeholder="Altura" ><label class="requerido">*</label>
        <br>
        <br>
        <input class="piso" type="text" name="Piso" placeholder="Piso">
        <input class="dpto" type="text" name="Dpto" placeholder="Depto.">
        <input class="cp" type="text" name="cp" placeholder="CP">
        <br>
        <br>
        <input class="vrs" type="text" name="Dpto" placeholder="Observaciones">
        <br>
        <br>
        <label class="requerido">* Campo requerido</label>
    </fieldset>
    <br>


    <input id="check" type="checkbox" required name="terminos"><a href="#"><label class="tyc">Acepto Terminos y Condiciones</label></a>

    <br>
    <br>
    <div class="botones">
      <a href="#" class="boton">Enviar</a>
      <button class="boton" type="reset" name="" value="">Borrar</button>

    </div>
</form>
      <div class="separador"></div>
</div>

<div class="divisor"></div>

<?php require_once('footer.php'); ?>


  </body>
</html>
