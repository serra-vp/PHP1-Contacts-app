<?php 
  include 'assets/scripts/connection.php'; 
  if(!empty($_SESSION['account_ID'])) header("Location: dashboard.php");
?>
<!DOCTYPE html>
<html lang="en">  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/gh/StephanWagner/jBox@v1.0.5/dist/jBox.all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Register</title>
</head>
<?php 
  if(isset($_REQUEST['register-action'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $stmt = $database->prepare("INSERT INTO account(account_username,account_password) VALUES(?,?)");
    $stmt->bind_param('ss',$username,$password);
    $stmt->execute();
    $stmt->close();

    $getAccountID_stmt = $database->prepare("SELECT account_ID FROM account WHERE account_username = ?");
    $getAccountID_stmt->bind_param('s',$username);
    $getAccountID_stmt->execute();
    $accountRes = $getAccountID_stmt->get_result();
    $accountRow = $accountRes->fetch_assoc();
    $getAccountID_stmt->close();

    $insertDetails_stmt = $database->prepare("INSERT INTO account_details VALUES(?,?,?)");
    $insertDetails_stmt->bind_param('sss',$accountRow['account_ID'],$firstname,$lastname);
    $insertDetails_stmt->execute();
    $insertDetails_stmt->close();    
    
    header("Location: index.php");
  }
?>
<body>
  <div class="form-div">
    <form class="login-form" method="POST">
      <div class="form-group">
        <label for="firstname">Firstname</label>
        <input type="text" class="form-control" id="firstname" name="firstname" required>
      </div>
      <div class="form-group">
        <label for="lastname">Lastname</label>
        <input type="text" class="form-control" id="lastname" name="lastname" required>
      </div>
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
        </div>
      </div>
      <button type="submit" name="register-action" class="btn btn-outline-primary btn-block">Register</button>
    </form>
  </div>

  <!-- javascript here -->
  <?php include 'assets/scripts/js.php'?>
  <!-- end of javascript here -->
</body>

</html>