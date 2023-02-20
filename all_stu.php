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
<body>
  <?php include('header.php'); require('controller.php'); 
      if(isset($_GET['search_course'])){
        $students = search($_GET);
      }else{
        $students = students();
      }
  ?>
  <div class="container mt-5">
    <div class="row mt-5">
      <div class="col-3"></div>
      <div class="col-6">
      <form method="GET">
          <div class="row">
            <div class="col-3">
              <select class='form-select rounded' name="search_course">
                <option value="1">1 course</option>
                <option value="2">2 course</option>
                <option value="3">3 course</option>
                <option value="4">4 course</option>
              </select>
          </div>
          <div class="col-2">
            <input type="submit" class="btn btn-success"  value="search">
          </div>
          <div class="col-7"></div>
          </div>
      </form>
        <table class="table mt-5">
          <thead>
            <tr>
              <th>№</th>
              <th>Name</th>
              <th>course</th>
              <th>floor</th>
              <th>room</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if(count($students)>0){
              $i=1;
                foreach($students as $student) {
                  ?>
                    <tr>
                      <td><?=$i++;?></td>
                      <td><?=$student['name'];?></td>
                      <td><?=$student['course'];?></td>
                      <td><?=$student['floor_id'];?></td>
                      <td><?=$student['room_id'];?></td>
                    </tr>
                <?php
              };  
            }else{
              ?>
              <tr>
                <td colspan="5" class='text-center bg-danger text-light'><?=$_GET['search_course'];?>-course students are not available</td>
              </tr>
            <?php
            }?>
          </tbody>
        </table>
      </div>
      <div class="col-3"></div>
    </div>
  </div>
</body>
</html>