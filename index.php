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
  .cards{
      width:100%;
      height:92.4vh;
    }
    a{
      color:#fff;
      text-decoration:none;
    }

    a:hover .card{
      background: #0D6CD2;
    }
    .card{
      width:200px;
      height:200px;
      display:flex;
      justify-content:center;
      align-items:center;
      background: #0D6CF8;
    }
    .card span{
      font-size:30px;
    }
  </style>
</head>
<body>
  <?php include("header.php");?>
    <div class="container">
      <section class="cards d-flex justify-content-center align-items-center"> 
        <div class="container">
          <h3 class='text-center mb-5 text-light'><span class='bg-primary p-1'>FLOORS</span></h3>
          <div class="d-flex justify-content-around ">
              <a href="floor.php?floor_id=1">
                <div class="card">
                  <span>1-floor</span>
                </div>
              </a>
              <a href="floor.php?floor_id=2">
                <div class="card">
                  <span>2-floor</span>
                </div>
              </a>
              <a href="floor.php?floor_id=3">
                <div class="card">
                  <span>3-floor</span>
                </div>
              </a>
          </div>
        </div>
      </section>
    </div>
</body>
</html>