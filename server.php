<?php
session_start();

// initializing variables

$errors = array();

// connect to the database
require './db.php';


// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);

  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) {
    array_push($errors, "Name is required");
  }
  if (empty($email)) {
    array_push($errors, "Email is required");
  }

  if (empty($password_1)) {
    array_push($errors, "Password is required");
  }
  if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM login WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query)  or die("connection failed at retrive");
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists

    if ($user['email'] === $email) {
      array_push($errors, "Account with this email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1); //encrypt the password before saving in the database

    $query = "INSERT INTO login (name,password,email) VALUES ('$name','$password','$email')";
    if (!mysqli_query($db, $query)) {
      echo ("Error description: " . mysqli_error($db));
      return;
    }


    $query = "select id from login where email='" . $email . "'";
    $result = mysqli_query($db, $query);
    $user = mysqli_fetch_assoc($result);
    $_SESSION['id'] = $user['id'];
    $_SESSION['name'] = $name;

    $_SESSION['email'] = $email;

    $_SESSION['success'] = "You are now logged in";
    header('location: ./orders.php');
  }
}


// LOGIN USER
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }


  if (count($errors) == 0) {

    $password = md5($password);

    $query = "SELECT * FROM login WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);

    if (mysqli_num_rows($results) == 1) {
      $user = mysqli_fetch_assoc($results);
      $_SESSION['name'] = $user['name'];
      $_SESSION['email'] = $user['email'];
      $_SESSION['id'] = $user['id'];
      $_SESSION['success'] = "You are now logged in";
      header('location: ./orders.php');
    } else {
      array_push($errors, "Wrong Email / password combination");
    }
  }
}