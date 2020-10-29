<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Operador de Fusion</title>
</head>
<body>
    <form>
        <div class="container mt-2">
            <div class="alert alert-primary" role="alert">
                A simple primary alert-check it out!
            </div>
            <div class ="btn-group" role ="group" aria-label="basic-example">
                <button type = "submit" name="edad" class ="btn btn-secondary" value="16">16</button>
                <button type = "submit" name="edad" class ="btn btn-secondary" value="17">17</button>
                <button type = "submit" name= "edad" class ="btn btn-secondary" value="18">18</button>
                <button type = "submit" name="edad" class ="btn btn-secondary" value="19">19</button>
            </div>
        </div>
    </form>
    <?php
    /* if(isset($_GET['edad'])== true) {
        if($_GET['edad']!= null) {
            $edad == $_GET['edad']; //esto se haria sin utilizar el operador fusion 
        }else {
            $edad=0;
        }
     }*/
     $edad =$_GET['edad'] ?? 0;
     
     if($edad==0) {
         echo "humano tanto selecciona tu edad";
     }else if($edad>0 && $edad<18) {
       echo " eres menor de edad";
     }
     else if($edad>=18) {
        echo " eres mayor de edad";
      }
     
    ?>
</body>
</html>