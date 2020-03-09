<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/gh/StephanWagner/jBox@v1.0.5/dist/jBox.all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<?php 
  if(isset($_REQUEST['add-contact-btn'])){
    $firstname = $_POST['firstname'];
    $middle_initial = $_POST['mi'];
    $lastname = $_POST['lastname'];
    $contact_number = $_POST['contact'];
    $address = $_POST['address'];

    chmod("assets/data",7777);
    $contact_file = fopen("assets/data/contacts.txt", "a");
    chmod("assets/data/contacts.txt",7777);
    fwrite( $contact_file, "$firstname:$middle_initial:$lastname:$contact_number:$address;");
    fclose($contact_file);
  }
?>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Mini Project - Contacts App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto ">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 18 18"><path d="M9 1C4.58 1 1 4.58 1 9s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm0 2.75c1.24 0 2.25 1.01 2.25 2.25S10.24 8.25 9 8.25 6.75 7.24 6.75 6 7.76 3.75 9 3.75zM9 14.5c-1.86 0-3.49-.92-4.49-2.33C4.62 10.72 7.53 10 9 10c1.47 0 4.38.72 4.49 2.17-1 1.41-2.63 2.33-4.49 2.33z"/></svg>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Profile</a>
            <div class="dropdown-divider"></div>
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
          <th scope="col">Address</th>
          <th scope="col">Contact Number</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>Otto</td>
          <td>Legazpi City</td>
          <td>69</td>
          <td>Otto</td>
        </tr>
      </tbody>
    </table>
    <button data-toggle="modal" style="outline: none;" data-target="#add-modal" class="btn-add-abs"></button>
    <div class="modal fade " id="add-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="POST" >
            <div class="modal-body">
              <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="firstname">Firstname: </label>
                  <input type="text" name="firstname" class="form-control" id="firstname" required>
                </div>
                <div class="form-group col-md-2">
                  <label for="middle-initial">M.I:</label>
                  <input type="text" name="mi" class="form-control" id="middle-initial" required>
                </div>
                <div class="form-group col-md-5">
                  <label for="lastname">Lastname: </label>
                  <input type="text" name="lastname" class="form-control" id="lastname" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="contact">Contact Number:</label>
                  <input type="text" name="contact" class="form-control" id="contact" required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="address">Address:</label>
                  <textarea rows="2" name="address" class="form-control" id="address" required ></textarea>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              <button type="submit" name="add-contact-btn" class="btn btn-success">Add</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- javascript here -->
  <?php include 'assets/scripts/js.php' ?>
  <!-- end of javascript here -->
</body>

</html>