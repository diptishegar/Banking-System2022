<?php
include "./components/header.php";
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
          <th scope="col">Current Balance</th>
          <th scope="col">Select a Customer</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Name</th>
          <td>@twitter</td>
          <td>@twitter</td>
          <td><button class="btn btn-outline-success py-1">Select</button></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<?php
include "./components/footer.php";
?>