<?php include 'assets/scripts/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/gh/StephanWagner/jBox@v1.0.5/dist/jBox.all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Login</title>
</head>
<?php 
  if(isset($_REQUEST['login-action'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $account_statement = $database->prepare("SELECT account_ID FROM account WHERE account_username = ? AND account_password = ?");
    $account_statement->bind_param('ss',$username, $password);
    $account_statement->execute();
    $accountRes = $account_statement->get_result();
    if($accountRow = $accountRes->fetch_assoc()){
      $account_statement->close();
      $_SESSION['account_ID'] = $accountRow['account_ID'];
      header("Location: dashboard.php");
      exit();
    }
    echo "<script>jboxAlert('red','No Account Found. Please Try again later')</script>";
  }
?>
<body>
  <div class="form-div">
    <form class="login-form" method="POST">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" name="login-action" class="btn btn-outline-primary btn-block">Submit</button>
      <a class="register-link" href="register.php">Register Here</a>
    </form>
  </div>

  <!-- javascript here -->
  <?php include 'assets/scripts/js.php'?>
  <!-- end of javascript here -->
</body>

</html>