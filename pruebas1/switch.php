<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>swicth</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form >
                    <div class="form-group">
                    <label>Selecciona un numero</label>
                    <select class="form-group"name="numero">
                        <option >seleccione un numero</option>
                            <option >1</option>
                            <option >2</option>
                            <option>3</option>
                            <option>4</option>
                            <option >5</option
                            </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" name="enviar" value="enviar">Enviar</button>
                    </div>
                    
            
                </form>
            </div>
        </div>
        <div class="row"><?php opcion(); ?></div>
    </div>
</body>
</html>
<?php 
function opcion() {
    if(isset($_GET['enviar'])){
        $numero=$_GET['numero'] ??0;
        switch ($numero) {
            case 1: 
              echo "el numero seleccionado es el uno";
            break;
            case 2: 
              echo "el numero seleccionado es el dos";
            break;
              case 3: echo "el numero seleccionado es el tres";
          break;
            case 4: echo "el numero seleccionado es el cuatro";
              break;
            case 5: echo "el numero seleccionado es el cinco";
          break;
            default : echo "debidte seleccionar un numero";
                # code...
                break;
            
           
        }
    }
}
  
?>