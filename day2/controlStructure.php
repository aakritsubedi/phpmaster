<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Control Structure in PHP</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/codeBlock.css">
</head>

<body>
  <div class="container">
    <h1>Control Structure in PHP</h1>
    <p>
      Control Structures are at the core of programming logic. They allow a script to react differently depending on what has already occurred, or based on user input, and allow the graceful handling of repetitive tasks.
    </p>
    <p>
      In PHP, there are two primary types of Control Structures:
      Conditional Statements and Control Loops
    </p>
    <h2>Conditional Statements</h2>
    <p>
      Conditional Statements allow you to branch the path of execution in a script based on whether a single, or multiple conditions, evaluate to true or false. Put simply, they let you test things and perform various actions based on the results.
    </p>
    <ul>
      <li>if statement</li>
      <li>else statement</li>
      <li>if else statement</li>
      <li>switch statement</li>
      <li>ternary operator</li>
    </ul>
    <hr>
    <h2>Control Loop</h2>
    <p>
      Frequently in PHP there are instances where you need to perform repetitive tasks, such as formatting data pulled from a database, sending out emails to a mailing list, or cycling through the contents of an array. Control Loops allow you to perform these tasks almost effortlessly.
    </p>
    <ul>
      <li>While loop</li>
      <li>Do...while loop</li>
      <li>for loop</li>
      <li>foreach loop</li>
    </ul>
    <hr>
    <h2 class="text-primary">Examples</h2>
    <h2>if statement</h2>
    <pre>
      <code>
      if(condition){
        //execute when true
      }
      </code>
    </pre>
    <pre>
      <code>
      $username = 'aakrit';
      $password = "subedi";
      if ($username == 'aakrit' && $password == 'subedi') {
        echo "Welcome Aakrit SUbedi";
      }
      </code>
    </pre>
    <b>Output: </b>
    <?php
    //If Statement
    $username = 'aakrit';
    $password = "subedi";
    if ($username == 'aakrit' && $password == 'subedi') {
      echo "Welcome Aakrit SUbedi";
    }
    ?>
    <h2>If .. else statement</h2>
    <pre>
      <code>
      if(cond){
        //execute when true
      }
      esle {
        //execute when false
      }
      </code>
    </pre>
    <pre>
      <code>
      $username = 'aakrit';
      $password = "sagarmatha";
      if ($username == 'aakrit' && $password == 'subedi') {
        echo "Welcome Aakrit SUbedi";
      } else {
        echo "Welcome guest";
      }
      </code>
    </pre>
    <b>Output:</b>
    <?php
    //If Statement
    $username = 'aakrit';
    $password = "sagarmatha";
    if ($username == 'aakrit' && $password == 'subedi') {
      echo "Welcome Aakrit SUbedi";
    } else {
      echo "Welcome guest";
    }
    ?>
    <pre>
    <code>
    $x = 1;
    while ($x <= 10) {
      echo $x . " ";
      $x++;
    }
  </code>
  </pre>
    <b>Output: </b>
    <?php
    $x = 1;
    while ($x <= 10) {
      echo $x . " ";
      $x++;
    }
    ?>
    <pre>
      <code>
        for($i=1; $i<=10; $i++){
          echo $i. " ";
        }
      </code>
    </pre>
    <h2>foreach loop</h2>
    <pre>
    <code>
    $studentMarks = array(1, 2, 34, 5, 6, 7, 8, 9, 12, 52);

    foreach ($studentMarks as $value) {
      if ($value % 2 == 0) {
        echo $value . " ";
      }
    }
    echo " || ";
    for ($i = 0; $i < count($studentMarks); $i++) {
      echo $studentMarks[$i] . " ";
    }
    </code>
  </pre>
  <b>Output: </b>
  <?php
  $studentMarks = array(1, 2, 34, 5, 6, 7, 8, 9, 12, 52);

  foreach ($studentMarks as $value) {
    if ($value % 2 == 0) {
      echo $value . " ";
    }
  }
  echo " || "; 
  for ($i = 0; $i < count($studentMarks); $i++) {
    echo $studentMarks[$i] . " ";
  }
  ?>
  <hr>
  </div>
</body>
</html>