<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  .carousel{
    width:500px;
  }
</style>
<body>
    <?php 
      include('header.php');
      require('controller.php');
      $room_img = room_img($_GET);
    ?>
    
  <div class="container mt-5">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-6">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

          <!-- Indicators/dots -->
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
          </div>

          <!-- The slideshow/carousel -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?=$room_img['img_1'];?>" class="d-block" style="width:100%;height:300px">
            </div>
            <div class="carousel-item">
              <img src="<?=$room_img['img_2'];?>" class="d-block" style="width:100%;height:300px">
            </div>
            <div class="carousel-item">
              <img src="<?=$room_img['img_3'];?>" class="d-block" style="width:100%;height:300px">
            </div>
          </div>
          

          <!-- Left and right controls/icons -->
          <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
  
        <?php include('form.php');?>
        
      </div>
      <div class="col-3"></div>
    </div>
  </div>
</body>
</html>