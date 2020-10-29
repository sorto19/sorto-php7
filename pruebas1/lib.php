    <?php
        echo " saludos de php 7 </br>";
        function desdeAqui() {
            echo "desde una funcion de php </br>";
        }
        function cambioAlcance() {
            $chancla = "no me alcanza";
        }
        function operacionesMat($operador='', $num1=0, $num2=0) {
            if($operador=='suma'){
                $resultado =$num1+$num2;
                echo 'el resultado de la operacion es:'. $resultado;
            }
           else if($operador=='resta'){
            $resultado =$num1-$num2;
            echo 'el resultado de la operacion es:'. $resultado;
          }
          else if($operador=='multiplicacion'){
            $resultado =$num1* $num2;
            echo 'el resultado de la operacion es:'. $resultado;
          }
          else if($operador=='divicion'){
            $resultado =$num1/$num2;
            echo 'el resultado de la operacion es:'. $resultado;
          }
          else if($operador=='modulo'){
            $resultado =$num1 % $num2;
            echo 'el resultado de la operacion es:'. $resultado;
          }
          else if($operador=='incremento'){
            $resultado = ++$num1;
            echo 'el resultado de la operacion es:'.$resultado;
        }
        else if($operador=='decremento'){
            $resultado = -- $num1;
            echo 'el resultado de la operacion es:'.$resultado;
        }
        else if($operador=='exponencial'){
            $resultado = $num1**$num2;
            echo 'el resultado de la operacion es:'.$resultado;
        }
          if($operador =='') {
              echo 'debes seleccionar un operador matematico';
          }
        }
        ?>