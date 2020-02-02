<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Variables in PHP</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
</head>
<body>
  <div class="container">
    <h1>Variables in PHP</h1>
    <p>Variables can store data of different types, and different data types can do different things.</p>
    <p>
      PHP supports the following data types: <br>
      String, Integer, Float, Boolean, Array, Object, NULL
    </p>
    <hr>
    <h2>Creating PHP variables</h2>
    <p>In PHP, a variable starts with the $ sign, followed by the name of the variable</p>
    <pre>
      $myName = "Aakrit Subedi";
      $myAge = 23;
      $mailId = "aakritsubedi9@gmail.com";
      $maritalStatus = false;
      $education = array('KEC','NIST','Paragon P School');
    </pre>
    <code>
      $myInfo = array('name'=> $myName,'age'=> $myAge);<br>
      echo $myInfo['name'];
    </code>
    <hr>
    <h2>Examples</h2>
    <?php 
      $myName = "Aakrit Subedi";
      $myAge = 23;
      $mailId = "aakritsubedi9@gmail.com";
      $maritalStatus = false;
      $education = array('KEC','NIST','Paragon P School');

      echo "My Information";
      echo "<br>";
      echo "<b>Name: </b> $myName <br>";
      echo "<b>Age: </b> {$myAge}yrs <br>";
    ?>
  </div>
</body>
</html>