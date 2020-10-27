<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>OPERADORES MATEMATICO</title>
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-12">
                <form>
                    <div class="form-group">
                        <label>Numero 1</label>
                        <input type="text" class="form-control" name="num1" value="<?php echo $_GET['num1']?? 0;  ?>">
                    </div>
                    <div class="form-group">
                        <label>Numero 2</label>
                        <input type="text" class="form-control" name="num2" value="<?php echo $_GET['num2']?? 0;  ?>">
                    </div>
                    <div class="form-group">
                        <label>Operador</label>
                        <?php  $operador =$_GET['operador'] ?? '';?>
                        <select name="operador" id=""  class="form-group">
                            <option value="" <?php if($operador=='')echo "selected ='selected'"; ?>>Seleccione un operador</option>
                            <option value="suma"<?php if($operador=='suma')echo "selected ='selected'"; ?>>Suma</option>
                            <option value="resta"<?php if($operador=='resta')echo "selected ='selected'"; ?>>Resta</option>
                            <option value="multiplicacion"<?php if($operador=='multiplicacion')echo "selected ='selected'"; ?>>multiplicacion</option>
                            <option value="divicion"<?php if($operador=='division')echo "selected ='selected'"; ?>>Division</option>
                            <option value="modulo"<?php if($operador=='modulo')echo "selected ='selected'"; ?>>Modulo</option>
                        </select>
                    </div>
                    <button type="submit" name="enviar" value="enviar" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="alert alert-primary" role="alert">
                 <?php
                  $botonEnviar = $_GET['enviar'] ??'';
                   if($botonEnviar == 'enviar') {
                       $num1 =$_GET['num1'] ?? 0;
                       $num2 =$_GET['num2'] ?? 0;
                      if($operador=='suma'){
                          echo 'el resultado de la operacion es:'.($num1+$num2);
                      }
                     else if($operador=='resta'){
                        echo 'el resultado de la operacion es:'.($num1-$num2);
                    }
                    else if($operador=='multiplicacion'){
                        echo 'el resultado de la operacion es:'.($num1*$num2);
                    }
                    else if($operador=='divicion'){
                        echo 'el resultado de la operacion es:'.($num1/$num2);
                    }
                    else if($operador=='modulo'){
                        echo 'el resultado de la operacion es:'.($num1%$num2);
                    }
                    if($operador =='') {
                        echo 'debes seleccionar un operador matematico';
                    }

                }
                 ?>    
                
                </div>
            </div>
        </div>
    </div>
</body>
</html>