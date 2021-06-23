<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta charset="UTF-1024">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
      
      <link rel="stylesheet" href="css/reset.css">
      <link rel="stylesheet" href="css/index.css">

    <title></title>
  </head>
  <body>
    <?php
    $_host="localhost";
    $_login="root";
    $_password="";
    $_db="hote";
    $_connect=new mysqli($_host, $_login, $_password, $_db);
    $_connect -> query("SET NAMES 'UTF-8'");
    $_sql="SELECT * FROM `apartments`";
    $_query=mysqli_query($_connect, $_sql) or die("Error getting env variables".mysqli_error($_connect));
    $_envVars=mysqli_fetch_all($_query);
    // foreach ($_envVars as $key => $env) {
    //   echo("<h1>");
    //   print_r($env[6]);
    //   echo("</h1>");
    // }
    ?>
    <div class="cardList">
      <div class="card">
        <div class="img">
          <img src="" alt="">
          <div class="text">
            <cite>HOTEL LONDON</cite>
            <div class="stars">
              <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
