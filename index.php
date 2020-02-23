<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Learning PHP</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <style>
    .php-blue {
      color: #B0B3D6;
    }

    .php-orange {
      color: #FFA500;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <h1><span class="php-orange">Learning</span> <span class="php-blue">PHP</span></h1>
    <h6 class="php-blue" style="font-family:cursive;">learning php becomes easy</h6>
    <hr>
    <div class="row">
      <div class="col-md-7">
        Stands for <code>Hypertext Preprocessor</code>
        <p>
          PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.
        </p>
        <ul>
          <li>PHP is a general-purpose programming language originally designed for web development.</li>
          <li>It was originally created by Rasmus Lerdorf in 1994</li>
          <li>PHP code is executed on the server, and the result is returned to the browser as plain HTML</li>
        </ul>
      </div>
      <div class="col-md-4 offset-1">
        <img src="assets/images/php.png" alt="PHP" class="img-fluid">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-3">
        <img src="assets/images/web-dev-php.png" alt="Web Development with PHP" class="img-fluid">
      </div>
      <div class="col-md-5">
        <h3>Q. What Can PHP do?</h3>
        <ul>
          <li>PHP can generate dynamic page content</li>
          <li>PHP can create, open, read, write, delete, and close files on the server</li>
          <li>PHP can collect form data</li>
          <li>PHP can send and receive cookies</li>
          <li>PHP can add, delete, modify data in your database</li>
          <li>PHP can be used to control user-access</li>
          <li>PHP can encrypt data</li>
        </ul>
        <p>With PHP you are not limited to output HTML. You can output images, PDF files, and even Flash movies. You can also output any text, such as XHTML and XML.</p>
      </div>
      <div class="col-md-4">
        <h3>Q. Why PHP? </h3>
        <ul>
          <li>PHP runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)</li>
          <li>PHP is compatible with almost all servers used today (Apache, IIS, etc.)</li>
          <li>PHP supports a wide range of databases</li>
          <li>PHP is free. Download it from the official PHP resource: <a target="_blank" href="http://www.php.net/">www.php.net</a></li>
          <li>PHP is easy to learn and runs efficiently on the server side</li>
        </ul>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-12">
        <h2>System Setup</h2>
        <ul>
          <li>
            Xampp <a href="https://www.apachefriends.org/index.html">Download Xampp</a>
            <p>XAMPP is a completely free, easy to install Apache distribution containing MariaDB, PHP, and Perl. The XAMPP open source package has been set up to be incredibly easy to install and to use.</p>
          </li>
          <li>
            Code Editor
            <p>VS Code, Sublime Text, Atom, Bracket, PhpStorm</p>
          </li>
        </ul>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-12">
        <h2>Table of Content</h2>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Day</th>
              <th>Description</th>
              <th>Files Link</th>
              <th>Demo Link</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>Day 1</th>
              <td>
                <ul>
                  <li> Server and code editor setup</li>
                  <li> Intro to PHP, coding practices</li>
                  <li> Intro to MVC pattern</li>
                  <li> <code>HelloWorld</code> Example</li>
                  <li> <code>Variables</code> in PHP</li>
                  <li> <code>Portfolio</code> Example</li>
                </ul>
              </td>
              <td>
                <ul>
                  <li><a href="https://github.com/aakritsubedi/phpmaster/blob/master/day1/helloWorld.php">helloWorld.php</a></li>
                  <li><a href="https://github.com/aakritsubedi/phpmaster/blob/master/day1/variables.php">variables.php</a></li>
                  <li><a href="https://github.com/aakritsubedi/phpmaster/blob/master/day1/portfolio.php">portfolio.php</a></li>
                </ul>
              </td>
              <td>
                <ul>
                  <li><a href="day1/helloWorld.php">helloWorld.php</a></li>
                  <li><a href="day1/variables.php">variables.php</a></li>
                  <li><a href="day1/portfolio.php">portfolio.php</a></li>
                </ul>
              </td>
            </tr>
            <tr>
              <th>Day 2</th>
              <td>
                <ul>
                  <li>Control Structure</li>
                  <li>Simple <code>ToDo App</code>(using Session storage)</li>
                  <li><code>Login App</code> (without database)</li>
                </ul>
              </td>
              <td>
                <ul>
                  <li><a href="https://github.com/aakritsubedi/phpmaster/blob/master/day2/controlStructure.php">controlStructure.php</a></li>
                  <li><a href="https://github.com/aakritsubedi/phpmaster/blob/master/day2/todoApp.php">todoApp.php</a></li>
                  <li><a href="https://github.com/aakritsubedi/phpmaster/blob/master/day2/controlStructure.php">loginApp.php</a></li>
                </ul>
              </td>
              <td>
                <ul>
                  <li><a href="day2/controlStructure.php">controlStructure.php</a></li>
                  <li><a href="day2/todoApp.php">todoApp.php</a></li>
                  <li><a href="day2/loginApp.php">loginApp.php</a></li>
                </ul>
              </td>
            </tr>
            <tr>
              <th>Day 3</th>
              <td>
                <ul>
                  <li>Function in PHP</li>
                  <li><code>Inbuilt</code> function in PHP</li>
                  <li><code>User defined</code> function in PHP</li>
                  <li>Example of functional programming</li>
                  <li>Intro to <code>MY SQL database</code></li>
                </ul>
              </td>
              <td>
                <ul>
                  <li><a href="https://github.com/aakritsubedi/phpmaster/blob/master/day3/function.php">Function</a></li>
                  <li><a href="https://github.com/aakritsubedi/phpmaster/blob/master/day3/inbuiltFunction.php">Inbuilt function</a></li>
                  <li><a href="https://github.com/aakritsubedi/phpmaster/blob/master/day3/userdefinedFunction.php">User defined function</a></li>
                  <li><a href="https://github.com/aakritsubedi/phpmaster/blob/master/day3/exampleFunction.php">Functional Programming examples</a></li>
                  <li><a href="https://github.com/aakritsubedi/phpmaster/blob/master/day3/mysqlIntro.php">MySQL Database</a></li>
                </ul>
              </td>
              <td>
                <ul>
                  <li><a href="day3/function.php">Function</a></li>
                  <li><a href="day3/inbuiltFunction.php">Inbuilt Function</a></li>
                  <li><a href="day3/userdefinedFunction.php">User Defined Function</a></li>
                  <li><a href="day3/example.php">Functional programming examples</a></li>
                  <li><a href="day3/mysqlIntro.php">MySQL Database</a></li>
                </ul>
              </td>
            </tr>
            <tr>
              <th>Github</th>
              <td>
                <ul>
                  <li>basis git command</li>
                  <li>
                    Push your code to <code>Github</code>
                    <ul>
                      <li>git add .</li>
                      <li>git commit -m "commit message"</li>
                      <li>git push origin <_branch_name_>
                      </li>
                    </ul>
                  </li>
                </ul>
              </td>
              <td>
                <ul>
                  <li><a href="files/atlassian-git-cheatsheet.pdf">GIT Cheatsheat</a></li>
                </ul>
              </td>
              <td></td>
            </tr>
            <tr>
              <th>Heroku App</th>
              <td>
                <ul>
                  <li>Setup <code>Heroku</code> Account</li>
                  <li>Create <code>Heroku App</code></li>
                  <li>Add <code>Procfile</code> for your project</li>
                  <li>Create a <code>repository</code> in Github</li>
                  <li>Link your <code>repository</code> with <code>Heroku App </code> created</li>
                  <li>Setup <code>Deploy</code> method (Github)</li>
                  <li>Push your code to <code>Github</code></li>
                </ul>
              </td>
              <td>
                <ul>
                  <li><a href="https://www.heroku.com/">Heroku App</a></li>
                </ul>
              </td>
              <td></td>
            </tr>
            <tr>
              <th>Day4</th>
              <td>
                <ul>
                  <li>Intro to <code>MySQL database</code></li>
                  <li><code>CRUD</code> SQL queries</li>
                  <li><code>phpMyAdmin</code> Overview
                    <ul>
                      <li>Introduction</li>
                      <li>Creating database</li>
                      <li>Creating table</li>
                      <li>relation between tables</li>
                    </ul>
                  </li>
                  <li>Example Database and Table setup in phpMyAdmin</li>
                </ul>
              </td>
              <td>
                <ul>
                  <li><a href="https://github.com/aakritsubedi/phpmaster/blob/master/day3/mysqlIntro.php">mysqlIntro.php</a></li>
                  <li><a href="https://github.com/aakritsubedi/phpmaster/blob/master/day4/introSQL.php">introSQL.php</a></li>
                  <li><a href="https://github.com/aakritsubedi/phpmaster/blob/master/day4/phpmyadmin.php">phpmyadmin.php</a></li>
                </ul>
              </td>
              <td>
                <ul>
                  <li><a href="day3/mysqlIntro.php">mysqlIntro.php</a></li>
                  <li><a href="day4/introSQL.php">introSQL.php</a></li>
                  <li><a href="day4/phpmyadmin.php">phpmyadmin.php</a></li>
                </ul>
              </td>
            </tr>
            <tr>
              <th>Day5</th>
              <td>
                <ul>
                  <li>MySQL and PHP</li>
                  <li>CRUD Queries</li>
                  <li>Login/SignUp System</li>
                </ul>
              </td>
              <td>
                <ul>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
              </td>
              <td>
                <ul>
                  <li><a href="day5/mysql_and_php.php">MySQL & PHP</a></li>
                  <li><a href="day5/CRUD.php">CRUD Queries</a></li>
                  <li><a href="day5/loginsys.php">Login/SignUp System</a></li>
                </ul>
              </td>
            </tr>
            <tr>
              <th>SDLC</th>
              <td>
                <ul>
                  <li>Introduction</li>
                  <ul>
                    <li>Waterfall Model</li>
                    <li>Iterative Model</li>
                    <li>Spiral Model</li>
                    <li>Prototype Model</li>
                    <li>Agile Model</li>
                  </ul>
                </ul>
              </td>
              <td></td>
              <td>
                <ul>
                  <li><a href="SDLC/index.php">SDLC</a></li>
                  <li><a href="https://existek.com/blog/sdlc-models/" target="_blank">SDLC Models</a></li>
                </ul>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>

</html>