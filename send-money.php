<!doctype html>
<html lang="en" style="overflow-x: hidden !important;">

<head>
  <!-- Required meta tags -->


</head>

<body style="overflow-x: hidden !important; position:relative !important;">
  <?php
  include "./components/header.php";
  include_once "./backend/config.php";
  ?>

  <style>
    .html {
      overflow-x: hidden !important;
    }

    .body {
      position: relative;
      overflow-x: hidden !important;
    }
  </style>

  <div class="card mb-3" style="
   display: inline;
   ">
   <p class="display-4 text-center text-success mb-0">Transfer Money</p>
    <div class="row g-0 row-g-0-div-cuser" style="align-items: center; margin-left: 5%;">
      <div class="col-md-4" style="animation: contactimg 2s ease 0s 1 normal forwards;">
        <img src="./styles/Images/WhatsApp Image 2022-02-06 at 9.29.37 PM.jpeg" width="400px" height="320px" class="img-fluid img-fluid-cuser rounded-start" alt="create-user">
      </div>
      <div class="col-md-8">
        <div class="card-body p-3">
          <?php
          $usersid = $_GET["id"];
          $allusers = "SELECT name, email, balance from user WHERE id=$usersid";
          if ($result = mysqli_query($conn, $allusers)) {
            if ($result) {

              $row = mysqli_fetch_array($result);
          ?><div class="card border-info mb-3" style="max-width: 700px">
                <span style="font-size:22px;" class="text-success text-center">Your Account Details :</span>
                <div style="margin-top: -.3rem;" class="card-header text-center">Name <span class="text-info">|</span> <?php echo $row['name']; ?><p class="pt-1">Email <span class="text-info">|</span> <?php echo $row['email']; ?></p>
                  <p class="font-weight-bold font-italic">Current Balance <span class="text-info">|</span> <?php echo $row['balance']; ?></p>
                </div>
            <?php
            }
            
          }

            ?>

            <div class="card-body text-info">
              <h5 class="card-title text-success">Select Receiver :</h5>
              <p style="margin-top:-4rem; font-size: 13px;
                  " class="pt-0 mt-0 text-muted font-italic card-text">
                Select one customer in order to transfer money to that customer's account from your account and also enter the amount you'd like to send.
              </p>
              <p class="card-text">

              <form style="
    max-width: fit-content;
    margin-top:2rem;
    flex-direction: column;
    align-items: center;
" class="d-flex" method="POST" action="./backend/transfer-money.php?uid=<?php echo $_GET["id"]; ?>">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Receiver</label>
                  </div>
                  <?php
                  $usersid = $_GET["id"];
                  $allUsers = "SELECT * from user WHERE id!=$usersid";
                  if ($result1 = mysqli_query($conn, $allUsers)) {
                  ?>
                    <select name="receive" class="custom-select" id="inputGroupSelect01" required>
                      <option value=""></option><?php
                                                while ($row1 = $result1->fetch_array()) {
                                                ?>
                        <option value=<?php echo $row1['id']; ?>><?php echo $row1['name']; ?></option>
                    <?php
                                                }
                                              }
                                              $result1->free();
                    ?>

                    </select>

                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text input-group-text-cuser" id="basic-addon1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" fill="currentColor" class="bi bi-wallet" viewBox="0 0 16 16">
                        <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z" />
                      </svg>
                    </span>
                  </div>
                  <input type="digits" class="form-control cuser-input" autocomplete="off" name="amt" placeholder="Amount" aria-label="Balance" aria-describedby="basic-addon1" required>
                  <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2">&#8377;</span>
  </div>
                </div>

                <button type="submit" name="submit" class="btn btn-success">Send</button>
              </form>




              </p>
            </div>
              </div>

        </div>
      </div>
    </div>
  </div>
  <?php
  include "./components/footer.php";
  ?>
</body>