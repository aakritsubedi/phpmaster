<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MySQL and PHP</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/codeBlock.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>MySQL and PHP</h1>
        <p>
          With PHP, you can connect to and manipulate databases. MySQL is the most popular database system used with PHP.
        </p>
        <h2>PHP + MySQL Database System</h2>
        <p>
          PHP combined with MySQL are cross-platform (you can develop in Windows and serve on a Unix platform)
        </p>
        <h2>Database Queries</h2>
        <p>
          A query is a question or a request. We can query a database for specific information and have a recordset returned.
        </p>
        <p>
          Look at the following query (using standard SQL):
        </p>
        <pre>
      <code>
      SELECT LastName FROM student;
      </code>
    </pre>
        <p>
          The query above selects all the data in the "LastName" column from the "student" table.
        </p>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h2>PHP Connect to MySQL</h2>
        <p>
          PHP 5 and later can work with a MySQL database using:
          <ul>
            <li>MySQLi extension (the "i" stands for improved)</li>
            <li>PDO (PHP Data Objects)</li>
          </ul>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h2>Should I Use MySQLi or PDO?</h2>
        <p>
          Both MySQLi and PDO have their advantages:
        </p>
        <div>
          <p>PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL databases.</p>
          <p>So, if you have to switch your project to use another database, PDO makes the process easy. You only have to change the connection string and a few queries. With MySQLi, you will need to rewrite the entire code - queries included.</p>
          <p>Both are object-oriented, but MySQLi also offers a procedural API.</p>
          <p>Both support Prepared Statements. Prepared Statements protect from SQL injection, and are very important for web application security.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h2>Open a Connection to MySQL</h2>
        <p>Before we can access data in the MySQL database, we need to be able to connect to the server:</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <h3>MySQLi Object-Oriented</h3>
        <pre>
          <code>
        $servername = "localhost";
        $username = "username";
        $password = "password";

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
          </code>
        </pre>
      </div>
      <div class="col-md-6">
        <h3>MySQLi Procedural</h3>
        <pre>
          <code>
        $servername = "localhost";
        $username = "username";
        $pass = "password";

        // Create connection
        $conn = mysqli_connect($servername, $username, $pass);

        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
          </code>
        </pre>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h3>PDO</h3>
        <pre>
          <code>
          $servername = "localhost";
          $username = "username";
          $password = "password";

          try {
              $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
              // set the PDO error mode to exception
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              echo "Connected successfully";
          }
          catch(PDOException $e){
              echo "Connection failed: " . $e->getMessage();
          }
          </code>
        </pre>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h2>Close the Connection</h2>
        <p>The connection will be closed automatically when the script ends. To close the connection before, use the following:</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <h3>MySQLi Object-Oriented:</h3>
        <pre>
          <code>
          $conn->close();
          </code>
        </pre>
      </div>
      <div class="col-md-4">
        <h3>MySQLi Procedural:</h3>
        <pre>
          <code>
          mysqli_close($conn);
          </code>
        </pre>
      </div>
      <div class="col-md-4">
        <h3>PDO:</h3>
        <pre>
          <code>
          $conn = null;
          </code>
        </pre>
      </div>
    </div>
  </div>
</body>

</html>