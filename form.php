
<div class="container-fluid mt-3">
          <form method='post'>
            <h3>Booking</h3>
            <?php 
          if($_SERVER['REQUEST_METHOD']=='POST'){
            add($_POST);
            if(empty($_POST['name'])){
            }
          }
    ?>
            <div class="form-group">
              <br><input type="text" class="form-control" name='name' placeholder='name' style="width:80%;" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
              <br><input type="number" class="form-control" name='phone' placeholder='phone' style="width:80%;" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div><br>
            <input type="hidden" name="room_id" value=<?=$_GET['room_id'];?>>
            <input type="hidden" name="floor_id" value=<?=$_GET['floor_id'];?>>
            <div class="form-group">
              <select class="form-select" required name='course'  style="width:80%;" id="inputGroupSelect01">
                <option selected disabled>course...</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div><br>
            <button type="submit" class="btn btn-primary">OK</button>
          </form>
        </div>
        