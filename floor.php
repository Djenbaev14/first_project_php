<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    .card{
      width:350px;
    }
    .apartment{
      margin-top:100px;
    }
    img{
      height:200px;
      width:100%;
    }
  </style>
</head>
<body>
  <?php 
    include("header.php");
    require('controller.php');
    session_start();
    $rooms = room($_GET['floor_id']);
  ?>

  <section class='apartment'>
    <h3 class='text-center text-primary mb-5'><?=$_GET['floor_id'];?>-floor</h3>
    <div class="container">
      <div class="row d-flex justify-content-around">
        <?php
          foreach ($rooms as $room) {
            ?>  
              <div class="card col-4 p-0 mt-4 mb-4">
                <img class='card-img-top'  src="<?=$room['img_1'];?>" alt="">
                <div class="card-body">
                  <h5 class="card-title"><?=$room['room_id'];?>-room</h5>
                  <?php
                    if($room['empty_space']>0){
                      ?>
                      <p class="card-text"><?=$room['capacity'];?> persons</p>
                      <p class="card-text"><?=$room['empty_space'];?>  space available</p>
                      <a href="room.php?floor_id=<?=$_GET['floor_id'];?>&room_id=<?=$room['room_id'];?>" class="btn btn-success">Full view</a>
                      <a href="bron.php?floor_id=<?=$_GET['floor_id'];?>&room_id=<?=$room['room_id'];?>" class="btn btn-primary">Booking</a>
                      <?php
                    }else{
                      echo "<h5 class='bg-danger  text-center p-1 rounded text-light' style='margin-top:80px'>bos orin joq</h5>";
                    }
                  ?>
                </div>
              </div>
            <?php
          }
        ?>
      </div>
    </div>
  </section>

</body>
</html>