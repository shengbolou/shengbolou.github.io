<?php


if(isset($_POST['login'])){
    header('Location: index.php');
}




if(isset($_POST['register'])){

    header('Location: register.php');

}


 ?>


 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Main</title>
     <link rel="stylesheet" href="/css/bootstrap.min.css"charset="utf-8"/>
     <link rel="stylesheet" href="Main.css" charset="utf-8">
   </head>
   <body>

     <div class="page-header text-center">
       <h1>Home page <br><small>register and login</small></h1>
     </div>

     <div class="container">
       <form  method="post">
         <input type="Submit" class="btn btn-primary center-block" name="login" value="login"/>
         <input type="Submit" class='sbt btn btn-primary center-block' name="register" value="Register"/>
       </form>

     </div>

   </body>
 </html>
