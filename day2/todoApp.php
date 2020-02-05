<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>To Do App</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/todo_style.css">
</head>

<body>
  <div class="container">
    <div class="heading">
      <h2 style="font-style: 'Hervetica';">ToDo List Application</h2>
    </div>
    <form method="GET" action="" class="input_form">
      <input type="text" name="task" class="task_input" required />
      <input type="submit" value="Add Task" id="add_btn" class="add_btn" />
    </form>
    <?php
    //start session
    session_start();
    if (isset($_GET['task'])) {
      if (!isset($_SESSION['todo'])) {
        $_SESSION['todo'] = array($_GET['task']);
      } else {
        array_push($_SESSION['todo'], $_GET['task']);
      }
    }
    ?>
    <!-- Displaying Todo Task -->
    <div class="well text-center">
      <h2>Your Todo</h2>
      <ul class='tasks'>
        <?php
        $todos = isset($_SESSION['todo']) ? $_SESSION['todo'] : array('Enter tasks');
        foreach ($todos as $todo) {
          echo "<li class='task'> {$todo} </li>";
        }
        ?>
      </ul>
    </div>
    <?php
    // remove all session variables
    // session_unset();

    // destroy the session
    // session_destroy();
    ?>
  </div>
</body>

</html>