<!doctype html>
<html lang="en" style="overflow-x: hidden !important;">

<head>
  <!-- Required meta tags -->


</head>

<body style="overflow-x: clip !important; position:relative !important;">
  <?php
  include "./components/header.php";
  ?>


  <div class="card mb-3" style="max-width: 700px;
   height: 700px;
   display: inline;
   ">
    <style>
      #indexh:hover {
        opacity: 1;
        border-bottom: 1px #a2d9ff solid !important;
        transform: translateX(100px);
      }
    </style>
    <div style="margin-left: 0rem !important; margin-right: 0rem !important;" class="row g-0">
      <div class="col-md-8 index-wrti">
        <div class="card-body p-3 index-wrti1" style="animation: myAnim 2s ease 0s 1 normal forwards;">
          <h5 class="text-center card-title text-primary display-4 display-sm-1 bold" style="border-bottom:1px solid white;display: inline-block; text-shadow: 3px 5px lightgrey;" id="indexh">Welcome to Banking System!</h5>
          <p class="card-text font-italic text-muted">Through this Banking System you are able to transfer money to any selected customer with any selected account, view all customers and transaction history.</p>
          <p class="card-text"><small class="text-muted display-6">Happy Banking!!!</small></p>
          <div class="card-text d-flex">
            <a href="customers.php"> <button class="btn btn-outline-success">Get Started</button></a>
          </div>
        </div>
      </div>
      <div class="col-md-4" style="animation: myanim 1s ease 0s 1 normal forwards;">
        <img style="border: 1px white solid;" src="./styles/Images/WhatsApp Image 2022-02-06 at 9.28.21 PM.jpeg" class="img-fluid rounded index-img" alt="...">
      </div>
    </div>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->


  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  <?php
  include "./components/footer.php";
  ?>
</body>

</html>