<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
  </head>
  <body>
   <div>

   
   <?php
if(DB::connection()->getDatabaseName())
   {
     echo "conncted sucessfully to database ".DB::connection()->getDatabaseName();
   }

   ?>


   </div>
  </body>
</html>