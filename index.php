<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Learning PHP</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
</head>
<body>
  <div class="container-fluid">
    <h1>Learning PHP</h1>
    Stands for <code>Hypertext Preprocessor</code>
    <p>
      PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.
    </p>
    <ul>
      <li>PHP is a general-purpose programming language originally designed for web development.</li>
      <li>It was originally created by Rasmus Lerdorf in 1994</li>
      <li>PHP code is executed on the server, and the result is returned to the browser as plain HTML</li>
    </ul>
    <hr>
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
    <hr>
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
          <td>Day 1</td>
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
          <td>Day 2</td>
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
          <td>Day 3</td>
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
                  <li>git push origin <_branch_name_> </li>
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
      </tbody>
    </table>
  </div>
</body>
</html>