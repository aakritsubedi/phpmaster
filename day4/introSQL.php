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
        <span class="def">The <code>SELECT</code> statement is used to select data from a database.The data returned is stored in a result table, called the result-set.</span>
        <pre>
          <code>
          SELECT column1, column2, ... FROM table_name;
          </code>
        </pre>
        Examples:
        <span class="example">SELECT * FROM students;</span>
        <span class="example">SELECT student_name, contact_no FROM students;</span>
        <span class="example">SELECT DISTINCT column1, column2, ... FROM table_name;</span>
        <span class="example">SELECT column1, column2, ...FROM table_name WHERE condition;</span>
        <span class="example">SELECT column1, column2, ...FROM table_name WHERE condition1 AND condition2 OR condition3 NOT condition3...;</span>
        <span class="example">SELECT column1, column2, ... FROM table_name ORDER BY column1, column2, ... ASC|DESC;</span>
      </li>
      <li>INSERT
        <span class="def">The <code>INSERT INTO</code> statement is used to insert new records in a table.</span>
        <pre>
          <code>
          INSERT INTO table_name VALUES (value1, value2, value3, ...);
          </code>
        </pre>
        Examples:
        <span class="example">INSERT INTO student (student_name, address, roll_no, email) VALUES ('Aakrit Subedi', 'Basundhara', '45/BCT/072', 'aakritsubedi9@gmail.com');</span>
        <span class="example">INSERT INTO student (student_name) VALUES ('Aakrit Subedi');</span>
      </li>
      <li>UPDATE
        <span class="def">The <code>UPDATE</code> statement is used to modify the existing records in a table.</span>
        <pre>
          <code>
          UPDATE table_name
          SET column1 = value1, column2 = value2, ...
          WHERE condition;
          </code>
        </pre>
        Examples:
        <span class="example">UPDATE student SET student_name = 'KP Oli' WHERE roll_no = '25/CSIT/075';</span>
        <span class="example">UPDATE student SET student_name = 'Raj Oli', City= 'Jhapa' WHERE roll_no = '25/CSIT/075';</span>
        <span class="example">UPDATE student SET college = 'Sagarmatha Engineering College' WHERE address = 'Sanepa';</span>
        <span class="example">UPDATE student SET address = 'Sanepa'; //update all record</span>
      </li>
      <li>DELETE
        <span class="def">The <code>DELETE</code> statement is used to delete existing records in a table.</span>
        <pre>
          <code>
          DELETE FROM table_name WHERE condition;
          </code>
        </pre>
        Examples: 
        <span class="example">DELETE FROM student WHERE student_name='Aakrit Subedi';</span>
        <span class="example">DELETE FROM table_name; //delete all records</span>
      </li>
    </ul>
    <a href="https://www.w3schools.com/sql/default.asp">More SQL queries</a>
    <hr>
  </div>
</body>

</html>