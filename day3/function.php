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
    <h1>Function in PHP</h1>
    <p>
      PHP functions are similar to other programming languages. A function is a piece of code which takes one more input in the form of parameter and does some processing and returns a value.
    </p>
    <p>
      There are two parts −
      <ul>
        <li>Creating a PHP Function</li>
        <li>Calling a PHP Function</li>
      </ul>
      <b>Syntax</b>
      <ul>
        <li>
          without parameter
          <code>
            <pre>
              /* Defining a PHP Function */
              function writeMessage() {
                  echo "You are really a nice person, Have a nice time!";
              }
              
              /* Calling a PHP Function */
              writeMessage();
         </pre>
          </code>
        </li>
        <li>
          with parameter
          <code>
            <pre>
              /* Defining a PHP Function */
              function addFunction($num1, $num2) {
                $sum = $num1 + $num2;
                echo "Sum of the two numbers is : $sum";
              }
              
              /* Calling a PHP Function */
              addFunction(10, 20);
            </pre>
          </code>
        </li>
        <li>
          returning value
          <code>
            <pre>
                /* Defining a PHP function */
                function addFunction($num1, $num2) {
                    $sum = $num1 + $num2;
                    return $sum;
                }

                /* Storing and using the return value */
                $return_value = addFunction(10, 20);
                
                echo "Returned value from the function : $return_value";
              </pre>
          </code>
        </li>
        <li>
          default parameter
          <code>
            <pre>
                function printMe($param = NULL) {
                    print $param;
                }
                
                printMe("This is test");
                printMe();
                </pre>
          </code>
        </li>
      </ul>
    </p>
  </div>
</body>

</html>