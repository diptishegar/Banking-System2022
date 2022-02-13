<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Banking System</title>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles/css.css">
<nav class="navbar navbar-expand-lg navbar-dark shadow mt-0 pt-0 bg-secondary">
  <div class="container-fluid py-3">
    <a style="font-size:28px" class="navbar-brand font-weight-400" href="index.php">Banking System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav d-flex">
        <style>
          a:hover{
              color: #a2d9ff !important;
          }
        </style>
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="customers.php">Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="transaction-history.php">Transaction History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="contact-us.php">Contact Us</a>
        </li>
        <li class="nav-item btn btn-outline-dark p-0 create-user-btn">
          <a class="nav-link text-white" href="create-user.php?userexists=0">Create User</a>
        </li>
      </ul>
    </div>
  </div>
</nav>