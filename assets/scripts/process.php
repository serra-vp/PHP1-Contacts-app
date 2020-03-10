<?php
  if (isset($_POST['add-contact-btn'])) {
    $firstname = $_POST['firstname'];
    $middle_initial = $_POST['mi'];
    $lastname = $_POST['lastname'];
    $contact_number = $_POST['contact'];
    $address = $_POST['address'];

    if ($firstname && $middle_initial && $lastname && $contact_number && $address) {
      $contact_file = fopen("assets/data/contacts.txt", "a");
      fwrite($contact_file, "$firstname:$middle_initial:$lastname:$contact_number:$address;");
      fclose($contact_file);
      unset($_POST);
    }
  } elseif (isset($_REQUEST['remove-contact-btn'])) {
    $id = $_REQUEST['remove-contact-btn'];

    $filename = "assets/data/contacts.txt";
    $filesize = filesize($filename);

    $file = fopen($filename, "r");
    $contactFileText = fread($file, $filesize);
    fclose($file);
    $exploded = explode(";", $contactFileText);
    \array_splice($exploded, $id, 1);

    if ($imploded = implode(";", $exploded)) {
      $file = fopen($filename, "w");
      fwrite($file, $imploded);
      fclose($file);
    }
  }
