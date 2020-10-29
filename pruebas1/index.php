<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Operadores de Comparacion<</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
            <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name ="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name ="pass" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button name="enviar" type="submit" class="btn btn-primary">Submit</button>
        </form>
       </div>
        </div>
    </div>
  
    <?php
     if(isset($_GET['enviar'])) {
         if($_GET['email'] == "sortodev@gmail.com" && $_GET['pass'] =="admin") {
         echo "ya entraste";
         }else {
             echo "no estas registrado";
         }
         
     }
     ?>
    </div>
  
 
</body>
</html>