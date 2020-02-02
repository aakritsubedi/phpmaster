<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Portfolio</title>
  <style> 
    .wrapper {
      width: 90%;
      margin: 0 auto;
      text-align: center;
    }
    .myInfo {
      font-size: 20px;
    }
  </style>
</head>
<body>
  <?php
    $myInfo = array(
      "name" => "Aakrit Subedi",
      "age" => 23,
      "gender" => "Male",
      "college" => array(
                    'Kantipur Engineering College',
                    'National School of Sciences',
                    'Paragon Public School'
      ),
      "contactNo" => "+977-98XXXXXXXX",
      "photo" => "https://via.placeholder.com/240",
      "email" => "aakritsubedi9@gmail.com"
    );
  ?>
  <div class="wrapper">
    <h1><?php echo strtoupper($myInfo['name']); ?> Information</h1>

    <div class="picture">
      <img src='<?php echo $myInfo['photo'] ?>' />
    </div>
    <br>
    <div class="myInfo">
      <?php 
        echo "<b>Name: </b> {$myInfo['name']} <br>"; 
        echo "<b>Age: </b> {$myInfo['age']}yrs <br>"; 
        echo "<b>Gender: </b> {$myInfo['gender']} <br>";
        echo "<b>Contact No.: </b> {$myInfo['contactNo']} <br>"; 
        echo "<b>Email: </b> <a href='mailto:{$myInfo['email']}'>{$myInfo['email']}</a><br>";
        echo "<b>College: </b>";
        echo "<ul style='list-style:none;'>";
        for($i=0; $i < count($myInfo['college']); $i++){
            echo "<li> {$myInfo['college'][$i]} </li>";
        }   
        echo "</ul>";
      ?>
      <hr>
      <?php 
        foreach($myInfo as $value){
          if(gettype($value) != 'array'){
            echo $value;
            echo "<br>";
          }
          else {
            foreach($value as $val){
              echo $val . ",";
            }
            echo "<br>";
          }
        }
      ?>
    </div>
  </div>
</body>
</html>