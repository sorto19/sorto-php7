<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
<form>
   <div class="container mt-2">
       <div class="row">
            <div class="col-12">
            <div class="form-group">
            <label >Correo Electronico</label>
            <input type="email" class="form-control" name="email" placeholder="Correo electronico">
        </div>
        <div class="form-group">
            <label>Contraseña</label>
            <input type="password" class="form-control" name="pass" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary" name="enviar" value="enviar">Enviar</button>
        </form>
           </div>
       </div>
   </div>
     <div class="row">
         <div class="col-12">
             <?php
                if(isset($_POST['enviar'])) {
                    $email = $_POST['email'] ?? '';
                    $pass = $_POST['pass'] ?? '';
                    //operador ternario
                    echo(($email =='sortodev@gmail.com' && $pass =='admin')? Alerta('ya entraste','primary'): Alerta('no entras','dange')) ;
                
                }
             ?>
            
             
         </div>
     </div>
 </div>
        
</body>
</html>
<?php
  function Alerta($texto,$tipo){
     return "<div class=\"alert alert-$tipo\">$texto</div>";
  }
?>