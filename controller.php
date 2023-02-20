<?php
  function add($data){
    $name=$data['name'];
    $course=$data['course'];
    $phone=$data['phone'];
    $floor_id=$data['floor_id'];
    $room_id=$data['room_id'];

    $students = json_decode(file_get_contents('base/student.json'),1);

    if($students == NULL){
      $new=[
        [
          "id"=>1,
          "floor_id"=>$floor_id,
          "room_id"=>$room_id,
          "name"=>$name,
          "course"=>$course,
          "phone"=>$phone
        ]
        ];
      file_put_contents('base/student.json',json_encode($new));
      redux($data);
      header('location:index.php');
    }else{
      rsort($students);
      $end_id=$students[0]['id']+1;
      $new=[
        "id"=>$end_id,
        "floor_id"=>$floor_id,
        "room_id"=>$room_id,
        "name"=>$name,
        "course"=>$course,
        "phone"=>$phone
      ];
      $i=0;
      foreach ($students as $studen) {
        if($new['phone']==$studen['phone']){
          $i++;
        }
      }
      if($i==0){
        array_push($students,$new);
        file_put_contents('base/student.json',json_encode($students)); 
        redux($data);
        header('location:index.php');
      }else{
        echo "<p class='bg-danger d-inline p-1 text-light'>you have already registered </p>";
      }
    }
  }

  function room($floor_id){
    $rooms=json_decode(file_get_contents('base/room.json'),1);
    $new=[];
    foreach ($rooms as $room) {
      if($floor_id==$room['floor_id']){
        array_push($new,$room);
      }
    }
    return $new;
  }
  function students(){
    $students=json_decode(file_get_contents('base/student.json'),1);
    
    return $students;
  }

  function redux($data){
    $rooms=json_decode(file_get_contents('base/room.json'),1);
    $new=[];
    foreach ($rooms as $room) {
      if($data['floor_id'] == $room['floor_id'] && $data['room_id'] == $room['room_id']){
        $room['empty_space']=$room['empty_space']-1;
        $room=[
          "id"=>$room['id'],
          "room_id"=>$room['room_id'],
          "floor_id"=>$room['floor_id'],
          "empty_space"=>$room['empty_space'],
          "capacity"=>$room['capacity'],
          "img_1"=>$room['img_1'],
          "img_2"=>$room['img_2'],
          "img_3"=>$room['img_3'],
        ];
        array_push($new,$room);
      }else{
        array_push($new,$room);
      }
    }
    file_put_contents('base/room.json',json_encode($new));
  }
  function room_img($data){
    $rooms=json_decode(file_get_contents('base/room.json'),1);
    foreach ($rooms as $room) {
      if($data['floor_id'] == $room['floor_id'] && $data['room_id'] == $room['room_id']){
        return $room;
        break;
      }
    }
  }

  function search($course){
    $students=json_decode(file_get_contents('base/student.json'),1);
    $new=[];
    foreach ($students as $student) {
      if($course['search_course']==$student['course']){
        array_push($new,$student);
      }
    }
    return $new;
  }
?>