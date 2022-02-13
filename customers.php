<?php
include "./components/header.php";
require "./backend/config.php";
?>

<div class="card">
  <div class="d-flex" style="
  justify-content: center;
  ">
  <img src="./styles/Images/WhatsApp Image 2022-02-06 at 9.30.41 PM.jpeg" class="card-img-top customer-images" alt="Customers">
  </div>
  <div class="text-center">
    <h2>All Customers</h2>
    <p class="text-muted font-italic">
    In order to send money, first select one Customer account, then you can transfer the money to any other Customer.
    </p>
  </div>
  <div class="card-body" style="overflow: scroll;">
    <table class="table table-hover">
      <thead>
        <tr class="table-customers">
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Current Balance ( &#8377; )</th>
          <th scope="col">Select a Customer</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $allusers = "SELECT * from user";
        if ($result = mysqli_query($conn, $allusers)) {

          while ($row = $result->fetch_array()) {
        ?>
         <tr>
        <?php
              $Name = $row["name"];
              $Email = $row["email"];
              $CurrBal = $row["balance"];
              
              echo '<td scope="row">'.$Name.'</td>';
              echo '<td scope="row">'.$Email.'</td>';
              echo '<td scope="row">'.$CurrBal.'</td>';
              echo '<td><a href="send-money.php?id='.$row["id"].'"><button class="btn btn-outline-success py-1">Select</button></a></td>';
        ?>
        </tr>
        <?php
          }
        }
      $result->free();
        ?>
      </tbody>
    </table>
  </div>
</div>
<?php
include "./components/footer.php";
?>