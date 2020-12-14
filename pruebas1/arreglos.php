<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
    <style>
    body {
        background-color: #B5CDE6; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;font-size: 4em; 
        padding: 10px;
    }
    
     </style>
</head>
<body>
     <?php 
     
       $frutas = array("karina","blanco","ramon","sorto");
       print_r($frutas);
       for ($i=0; $i <count($frutas) ; $i++) { 
         echo $frutas[$i] ."<br/>";
       }
     ?>
    
</body>
</html>