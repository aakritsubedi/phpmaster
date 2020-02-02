<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login App</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 

</head>
<body>
  <div class="container">
    <div class="row">
    <form action="" method="GET">
      <div class="form-group">
        <input type="text" placeholder="Enter username" class="form-control" name="username">
      </div>
      <div class="form-group">
        <input type="text" placeholder="Enter passoword" class="form-control" name="password">
      </div>
      <div class="form-input">
        <input type="submit" class="btn btn-success" value="Submit">
      </div>
    </form>
    </div>
    <div class="row">
      <div class="col-md-12">
        <?php 
          if(isset($_GET['username']) && isset($_GET['password'])){
            if($_GET['username'] == 'aakrit' && $_GET['password'] == 'subedi'){
              echo "Welcome {$_GET['username']}";
            }
            else {
              echo "sorry try again";
            }
          }
        ?> 
      </div>
    </div>
  </div>
</body>
</html>