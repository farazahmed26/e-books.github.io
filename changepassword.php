<?php
session_start();


if(!isset($_SESSION['userid']))
{
  header('Location: login.php');
}

include('db_conn.php');

// $query = "select * from customers";
// $rawdata = mysqli_query($conn, $query);
$id = $_SESSION['userid'];


?>
<!doctype html>
<html lang="en">

<head>
  <title>Change Password</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"> -->
  <?php
  include 'head.php';
  ?>
</head>

<body>

  <?php
  include 'nav.php';
  ?>
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="images/book.png" class="img-fluid" alt="Phone image" height="200px" width="500px">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
          <form action="changepassword.php" method="post">
            <p class="text-center h1 fw-bold mb-4 mx-1 mx-md-3 mt-3"> Change Password</p>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form1Example13"> <i class="bi bi-chat-left-dots-fill"></i> Old Password</label>
              <input type="password" id="form1Example13" required class="form-control form-control-lg py-3" name="cpass" autocomplete="off" placeholder="Enter Old Password" />

            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form1Example23"><i class="bi bi-chat-left-dots-fill"></i> New Password</label>
              <input type="password" id="form1Example23" required class="form-control form-control-lg py-3" name="npass" autocomplete="off" placeholder="Enter your New Password" />

            </div>
            <div class="form-outline mb-4">
              <label class="form-label" for="form1Example23"><i class="bi bi-chat-left-dots-fill"></i> Confirm Password</label>
              <input type="password" id="form1Example23" required class="form-control form-control-lg py-3" name="cnpass" autocomplete="off" placeholder="Re-enter your New Password" />

            </div>


            <!-- Submit button -->
            <!-- <button type="submit" class="btn btn-primary btn-lg">Login in</button> -->
            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
              <input type="submit" value="Submit" name="btnsave" class=" btn-lg text-light my-2 py-3" style="width:100% ; background-color:#eaa451; font-weight:600;" />
            </div>

          </form><br>
          <?php

          if (isset($_POST['btnsave'])) {
            $cpass = $_POST['cpass'];
            $npass = $_POST['npass'];
            $cnpass = $_POST['cnpass'];

            $queryPass = "select pass from customers where c_id = $id";
            $rawPass = mysqli_query($conn, $queryPass);
            $rowPass = mysqli_fetch_assoc($rawPass);

            if ($rowPass['pass'] == $cpass) {
              if ($npass == $cnpass) {
                $query = "update customers set pass= '$npass' where c_id=$id";
                $check = mysqli_query($conn, $query);

                if ($check) {
                  echo "<p class='text-success'>Password Updated Successfully!!!</p>";
                } else {
                  echo "<p class='text-danger'>Password Update Failed!!!</p>";
                }
              } else {
                echo "<p class='text-danger'>Mismatched Passwords Error</p>";
              }
            } else {
              echo "<p class='text-danger'>Your password does not match with the one you provided at registration </p>";
            }
          }

          ?>
        </div>
      </div>
    </div>
    <!-- Footer -->
  </section>






  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>