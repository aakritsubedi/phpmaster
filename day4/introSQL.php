<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SQL Queries</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/codeBlock.css">
</head>

<body>
  <div class="container">
    <h1>SQL Queries <code>MySQL</code></h1>
    <p>
      SQL is a standard language for storing, manipulating and retrieving data in databases.
    </p>
    <h2>Database Tables</h2>
    <p>
      A database most often contains one or more tables. Each table is identified by a name (e.g. "Students" or "Library"). Tables contain records (rows) with data.
    </p>
    <h2>SQL Statements</h2>
    <p>
      Most of the actions you need to perform on a database are done with SQL statements.
    </p>
    <p>
      <b>Example: </b>
      <code>
        SELECT * FROM Students;
      </code>
      //selects all the records in the "Students" table
    </p>
    <p>
      <b>Note: </b> SQL keywords are NOT case sensitive: select is the same as SELECT
    </p>
    <hr>
    <ul class="code">
      <li>SELECT 
        
        <span class="syntax"> SELECT <_columns_> from <_tableName_></span>
        <code>
          <pre>
          SELECT column1, column2, ... FROM table_name;
          </pre>
        </code>
        Examples
        <span class="example">SELECT * FROM students;</span>
        <span class="example">SELECT student_name, contact_no FROM students;</span>
        <span class="example">SELECT DISTINCT column1, column2, ... FROM table_name;</span>
        <span class="example">SELECT column1, column2, ...FROM table_name WHERE condition;</span>
        <span class="example">SELECT column1, column2, ...FROM table_name WHERE condition1 AND condition2 OR condition3 NOT condition3...;</span>
        <span class="example">SELECT column1, column2, ... FROM table_name ORDER BY column1, column2, ... ASC|DESC;</span>
      </li>
      
    </ul>
  </div>
</body>

</html>