
<!Doctype html>
<html lang="es">
<head>
	<title>Login | Registros de Notas</title>
	
<!-- CSS only -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	
	
	
</head>
<body>
<div class="jumbotron jumbotron-fluid bg-primary">
<img class="img1" src="image/escudo.png" width="10%">
 
  <div class="container">
  <center><h1 class="display-4 text-white" >Colegio de la Salle - Cucuta</h1></center>
   <center> <p class="lead text-white">Sistema de Calificaciones.</p></center>
  </div>
</div>
        <center>
         <form action="" method="post" class="form3">
         	<div class="card-header">
         	Selor(a) Usuario Porfavor diligenciar para crear su cuenta e ingresar al sistema.
         	
         		<br>
         		<br>
         	<div class="form-element">
       <label>Usuario: </label>  		
     <input type="text" name="username" class="form-control" style="width: 65%" pattern="[a-za-Z0-9]+" /><br/>
        		
   </div>	
         
       <div class="form-element">
      <label>Contraseña:  </label>
      	<input type="password" name="password" class="form-control" style="width: 65%" />
       	
           </div>
        		
        
       <div class="form-element">
      <label>Nombres y Apellidos:  </label>
      	<input type="text" name="nombre" class="form-control" style="width: 65%" />
       	
           </div>
            		
   
         
       <div class="form-element">
      <label>Rol:  </label>
    <select name="rol" class="form-control" style="width: 65%" />
            
            <option> </option>
            <option>Administrador</option>
            <option>Docente</option>
            <option>Padres</option>
            
		   </select>
           
             </div>
             <br>
     <button type="submit" class="btn btn-primary" name="register" value="register">Registrar</button>
     <button type="reset" class="btn btn-primary">Borrar</button>
         
         </div>
			
			<?php
			
			include("conexionbd.php");
			if(isset($_POST['register']))
			{
				$usuario = $_POST['username'];
				$password = $_POST['password'];
				$datos = $_POST['nombre'];
				$roles = $_POST['rol'];
				
				if($usuario=="" || $password=="" || $datos=="" || $roles=="")
			{
			echo "<script> alert('todos los campos son obligatorios para su registro')
			location.href='../escolar/vista.registro.php';</script>";
			
			}
				else{
			$query = mysqli_query($conectar, "INSERT INTO cuentas(usuario, password, nombre, rol)
					value ('$usuario','$password','$datos','$roles')");
		
				
			}
			
			
			
			}
		
			
			?>
			
			
			
         </form>
	</center><br>
         	

<footer class="text-center text-lg-start bg-dark text-warning">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Encuentra Información en esta Sesión:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <img src="image/facebook.png" width="5%">
      </a>
      <a href="" class="me-4 text-reset">
       <img src="image/google.png" width="5%">
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <img src="image/escudo.png" width="70%">
         
    
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">login</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="">www.iselasalle.gov.co</a>
  </div>
</html>