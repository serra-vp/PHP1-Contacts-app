<?php 
  include 'assets/scripts/connection.php'; 
  if(empty($_SESSION['account_ID'])) header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/gh/StephanWagner/jBox@v1.0.5/dist/jBox.all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<?php 
  include 'assets/scripts/process.php';
?>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a style="flex: 1;" class="navbar-brand" href="#">Mini Project - Contacts App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto dropleft">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 18 18"><path d="M9 1C4.58 1 1 4.58 1 9s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm0 2.75c1.24 0 2.25 1.01 2.25 2.25S10.24 8.25 9 8.25 6.75 7.24 6.75 6 7.76 3.75 9 3.75zM9 14.5c-1.86 0-3.49-.92-4.49-2.33C4.62 10.72 7.53 10 9 10c1.47 0 4.38.72 4.49 2.17-1 1.41-2.63 2.33-4.49 2.33z"/></svg>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="assets/scripts/logout.php">Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <div class="contact-table-div">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Firstname</th>
          <th scope="col">Middle Initial</th>
          <th scope="col">Lastname</th>
          <th scope="col">Contact Number</th>
          <th scope="col">Address</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <?php include 'assets/scripts/fetch_contacts.php'?>
    </table>
    <!-- Add Contact Modal -->
    <?php include 'assets/scripts/add_contact.php' ?>
    <!-- End of Add Contact Modal -->
  </div>


  <!-- javascript here -->
  <?php include 'assets/scripts/js.php' ?>
  <!-- end of javascript here -->
</body>

</html>