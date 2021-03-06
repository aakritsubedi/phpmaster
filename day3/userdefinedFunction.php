<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP User Defined Function</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/codeBlock.css">
</head>

<body>
  <div class="container">
    <h2>User Defined Function</h2>
    <ul>
      <li>A function is a block of statements that can be used repeatedly in a program.</li>
      <li>A function will not execute automatically when a page loads.</li>
      <li>A function will be executed by a call to the function.</li>
    </ul>
    <p>
      A user-defined function declaration starts with the word <code>function</code>:
    </p>
    <h3>Syntax</h3>
    <pre>
      <code>
      function functionName() {
        pre to be executed;
      }
      </code>
    </pre>
    <hr>
    <h2>Examples</h2>
    <h4>function to add two numbers</h4>
    <ul>
      <li>without parameter</li>
      <pre>
        <code>
          function sum(){
            $a = 5;
            $b = 6;
            $result = $a + $b;

            echo "The sum of {$a} and {$b} is {$result}";
          }
        </code>
      </pre>
      <b>Output: </b>
      <?php
      function sum()
      {
        $a = 5;
        $b = 6;
        $result = $a + $b;

        echo "The sum of {$a} and {$b} is {$result}";
      }

      sum();
      ?>
      <li>with parameters</li>
      <pre>
        <code>
          function sum($a, $b){
            $result = $a + $b;

            echo "The sum of {$a} and {$b} is {$result}";
          }
        </code>
      </pre>
      <b>Output: </b>
      <?php
      function sum1($a, $b)
      {
        $result = $a + $b;

        echo "The sum of {$a} and {$b} is {$result}";
      }

      sum1(9, 15);
      ?>
      <li>returning value</li>
      <pre>
        <code>
          function sum2(){
            $a = 5;
            $b = 6;
            $result= $a + $b;

            return $result;
          }

          echo "The required result is ". sum2();
        </code>
      </pre>
      <b>Output: </b>
      <?php
      function sum2()
      {
        $a = 5;
        $b = 6;
        $result = $a + $b;

        return $result;
      }

      echo "The required result is " . sum2();
      ?>
      <li>default value</li>
      <pre>
        <code>
          function sum($a=5, $b=6){
            $result = $a + $b;

            return $result;
          }

          $res = sum3(9);

          echo "The required result is ". $res;
        </code>
      </pre>
      <b>Output: </b>
      <?php
      function sum3($a = 5, $b = 6)
      {
        $result = $a + $b;

        return $result;
      }

      $res = sum3(9);

      echo "The required result is " . $res;
      ?>
    </ul>
  </div>
</body>

</html>