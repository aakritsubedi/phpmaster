<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Working with PHPmyAdmin</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
    .php {
      color: #B0B3D6;
    }

    .myAdmin {
      color: #FFA500;
    }

    .note {
      padding: 10px 50px;
      border-radius: 5px;
      border: 1px solid #eeeeee;
      background-color: #f4f4f4;
    }

    .note:hover {
      border: 1px solid #000000;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1><span class="php">php</span><span class="myAdmin">MyAdmin</span></h1>
    <p>
      phpMyAdmin is a free and open source administration tool for MySQL and MariaDB. As a portable web application written primarily in PHP, it has become one of the most popular MySQL administration tools, especially for web hosting services.
    </p>
    <h2>Features</h2>
    <span>Features provided by the program include:</span>
    <ol>
      <li>Web interface</li>
      <li>MySQL and MariaDB database management</li>
      <li>Import data from SQL</li>
      <li>Export data to various formats: CSV, SQL, XML, PDF(via the TCPDF library), ISO/IEC 26300 - OpenDocument Text and Spreadsheet, Word, Excel, LaTeX and others</li>
      <li>Administering multiple servers</li>
      <li>Creating PDF graphics of the database layout</li>
      <li>Creating complex queries using query-by-example (QBE)</li>
      <li>Searching globally in a database or a subset of it</li>
      <li>Transforming stored data into any format using a set of predefined functions, like displaying -data as image or download-link</li>
      <li>Live charts to monitor MySQL server activity like connections, processes, CPU/memory usage, etc.</li>
      <li>Working with different operating systems.</li>
      <li>Make complex SQL queries easier.</li>
    </ol>

    <span>lets start using phpMyAdmin .. <a href="http://localhost/phpmyadmin/" target="_blank">click here</a></span>
    <hr>
    <h2>Creating Database</h2>
    <ul>
      <li>click the <code>New</code> button in left sidebar</li>
      <li>enter the database name</li>
      <li>click on the <code>CREATE</code> button</li>
    </ul>
    <div>
      <img src="images/creatingDB.png" alt="Creating Database" class="img-fluid">
    </div>
    <hr>
    <h2>Creating Tables</h2>
    <ul>
      <li>click on <code>New</code> button in left sidebar under the database</li>
      <li>enter the table name in top section</li>
      <li>add no. of rows from top section menu</li>
      <li>finally, click on <code>Save</code></li>
    </ul>
    <div>
      <img src="images/creatingTable.png" alt="Creating Tables" class="img-fluid">
    </div>
    <hr>
    <h2>Creating Relation</h2>
    <div class="note">
      <b>Primary Key: </b>
      <p>
        A primary key is a special relational database table column (or combination of columns) designated to uniquely identify all table records.<br>A primary key’s main features are:</p>
      <ul>
        <li>It must contain a <code>unique value</code> for each row of data.</li>
        <li>It cannot contain <code>null values</code>.</li>
      </ul>
      <b>Foreign Key: </b>
      <p>
        A <code>foreign key</code> is a column or group of columns in a relational database table that provides a link between data in two tables. It acts as a cross-reference between tables because it references the primary key of another table, thereby establishing a link between them.
      </p>
    </div>
    <ul>
      <li>Create require table schema</li>
      <li>select the table which contains <code>Foreign Key</code></li>
      <li>select the <code>primary key</code> of the selected table (<code>foreign key</code>)</li>
      <li>select the <code>database</code> name from the list</li>
      <li>select the <code>related table</code> name from the list</li>
      <li>select the <code>column</code> of the related table (<code>primary key</code>)</li>
    </ul>
    <div>
      <img src="images/creatingRelation.png" alt="Creating Relation" class="img-fluid">
    </div>
    <hr>
  </div>
</body>

</html>