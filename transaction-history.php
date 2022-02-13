<?php
include "./components/header.php";
require "./backend/config.php";
?>

<div class="card">
  <div class="d-flex" style="
  justify-content: center;
  ">
  <img src="./styles/Images/WhatsApp Image 2022-02-06 at 1.58.57 AM.jpeg" class="card-img-top customer-images" alt="Customers">
  </div>
  <div class="text-center">
    <h2>Transaction History</h2>
  </div>
  <div class="card-body" style="overflow: scroll;">
    <table class="table table-hover">
      <thead>
        <tr class="table-customers">
        <th scope="col">Sr. no.</th>
          <th scope="col">Sender</th>
          <th scope="col">Receiver</th>
          <th scope="col">Amount</th>
          <th scope="col">Date and time</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $allusers = "SELECT * from transaction_record";
        $count = 0;
        if ($result = mysqli_query($conn, $allusers)) {

          while ($row = $result->fetch_array()) {
            $count= $count+1;
        ?>
         <tr>
        <?php
              $sender = $row["sender"];
              $receiver = $row["receiver"];
              $amount = $row["amount"];
              $sent_date = $row["sentdate"];
              echo '<td scope="row">'.$count.'</td>';
              echo '<td scope="row">'.$sender.'</td>';
              echo '<td scope="row">'.$receiver.'</td>';
              echo '<td scope="row">'.$amount.'</td>';
              echo '<td scope="row">'.$sent_date.'</td>';
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