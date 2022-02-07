<?php
include "./components/header.php";
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
        <tr>
          <th scope="row">Name</th>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<?php
include "./components/footer.php";
?>