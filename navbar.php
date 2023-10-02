        
        <header class="navbar navbar-bright navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Navagacion</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="home.php" class="navbar-brand"><i class="icon-home"></i> Inicio</a>
    </div>
      
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li><a href="profile.php"><i class="icon-user"></i> Perfil</a></li>
        <li><a href="photos.php"><i class="icon-picture"></i> Fotos</a></li>
        <li><a href="friends.php"><i class="icon-group"></i> Amigos</a></li>
	<li><a href="message.php"><i class="icon-group"></i>Chats</a></li>
  <li><a href="chat/login.php" target="_blank"><i class="icon-group"></i>CHATLIVE</a></li>
        
        <li>
          <a href="logout.php"><i class="icon-signout"></i>Salir</a>
        </li>
      </ul>
  
		<div class="pull-right">
            <form class="form-inline" method="post" action="search.php">
             <input type="text" name="search" class="form-control"  id="span5" placeholder="Buscar Amigos">
            </form>
		</div>
   
    </nav>
  </div>
</header>