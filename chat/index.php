<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: users.php");
}
?>

<?php include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="form signup">
         <center>
         <header>
           
           <h1>Chat Live</h1>
           <img  width="90px" src="https://images.vexels.com/media/users/3/214671/isolated/preview/7dec94c3cb64f4119d51e69ab5b12011-icono-de-trazo-de-burbujas-de-chat.png" alt="Logo del Chat Live"  >
       </header>
     </center>
         <center>
        <h1>Regístrate</h1>
         </center>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
        
            <input type="text" name="fname" placeholder="Nombre" required>
          </div>
          <div class="field input">
          
            <input type="text" name="lname" placeholder="Apellido" required>
          </div>
        </div>
        <div class="field input">

          <input type="text" name="email" placeholder="Newcorreo@gmail.com" required>
        </div>
        <div class="field input">
        
          <input type="password" name="password" placeholder="Ingresa Nueva Contraseña" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Tu Avatar</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Registrar Datos">
           <button class="op"><a href="login.php">Iniciar seccion</a></button>
        </div>
      </form>
      <div class="link">Ya te registraste? <a href="login.php">Ingresa para chatear</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>

</html>
