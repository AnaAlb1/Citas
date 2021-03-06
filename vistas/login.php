<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: usuarios.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Face messages</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off" class="formula">
        <div class="error-text"></div>

        <div class="field input">
          <label>Dirección de correo electrónico</label>
          <input type="text" name="email" placeholder="Introduce tu correo electrónico" required>
        </div>

        <div class="ejes">
          <div class="ejes__item">
            <label>Ingresa tu contraseña</label>
            <input type="password" name="password" placeholder="Ingresa tu contraseña" required>
          </div>
          <div class="ejes__item">
            <i class="fas fa-eye"></i>
          </div>
        </div>

        <div class="field button">
          <input type="submit" name="submit" value="Continuar chateando">
        </div>

      </form>

      <div class="link">Aún no te has registrado? <a href="index.php" class="rg">Regístrate ahora</a></div>
    </section>
    <section class="video">
      <video src="../img/video.mp4" muted loop autoplay></video>
    </section>
  </div>
  
  <script src="../js/pass-show-hide.js"></script>
  <script src="../js/login.js"></script>

</body>
</html>
