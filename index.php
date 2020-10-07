<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<header>

    <h1>MI TIENDA.COM</h1>
    <hr>

</header>

<main>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <form action="agregardatos.php" method="POST">
            <div class="form-group">
    <label for="nombre">nombre</label>
    <input type="texto" class="form-control" id="nombre"name="nombre">
  </div>     <div class="form-group">
    <label for="cedula">cedula</label>
    <input type="number" class="form-control" id="cedula"name="cedula">
  </div>
  <div class="form-group">
    <label for="apellido">apellido</label>
    <input type="texto" class="form-control" id="apellido"name="apellido"> 
  </div>
  <label for="edad">edad</label>
    <input type="number" class="form-control" id="edad"name="edad">
  </div>
  </div>
  <label for="telefono">telefono</label>
    <input type="number" class="form-control" id="telefono"name="telefono">  
  </div>
  </div>
  <label for="direccion">direccion</label>
    <input type="texto" class="form-control" id="direccion"name="direccion"> 
  </div>

 
 
  <button type="submit" class="btn btn-primary btn-block" name="botonenviar">registra</button>
           
           
           
            </form>


        </div>
    </div>
</div>
</main class="bg-dark text-white">
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>