<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales y Ciclos</title>
     <style>
       body{
           font-family: Roboto;
           background-color: #BDE85F;
       }div {

            background: white;
            padding: 20px;
            margin: 0 auto;
            width: 200px;
       }
    h1{
        font-size: 36px;
    
      </style>
</head>
<body>
     <div>
        <?php 
            $hora =12;
        if ($hora>6 && $hora<12) {
            echo "<h1> hola buenos dias </h1>";
        }else{
            echo "<h1> hola buenas tardes </h1>";
        }
        for ($i=0; $i <20 ; $i++) { 
            echo "te amo karina";
        }
        ?>
     </div>  
</body>
</html>