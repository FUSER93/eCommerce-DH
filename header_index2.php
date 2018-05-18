
    <header>
      <h2><a href="#">Website Logo</a></h2>
      <nav>
        <?php if (no estoy logueado) {?>
        <li><a href="formulario2.php">¡Registrate!</a></li>
        <li> | </li>
        <li><a href="login.php">Login</a></li>
      <?php else{?>
        <li>Mi Perfil</li>
        <li>Logout</li>
      <?php } ?>
      </nav>
    </header>
