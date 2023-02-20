<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@300;400;500;600&family=Open+Sans:wght@300;400;500;600;700&family=Poppins:wght@100;300;400;500;600&family=Share+Tech+Mono&display=swap');
  body{
    font-family: 'Poppins', sans-serif;
  }
  </style>
</head>
<body>
  <?php include("header.php"); 
      require('controller.php');
  ?>
  <div class="container">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-6">
        <?php include('form.php');?>
      </div>
      <div class="col-3"></div>
    </div>
  </div>
</html>