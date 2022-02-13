<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles/css.css">
<?php
include_once 'config.php';
if(isset($_POST['submit']))
{
    $css = '
    <div class="d-flex justify-content-center">
    <div class="card bg-dark text-white border border-success" style="width: 310px; margin-top: 200px;">
    <div class="card-body">
      <h5 class="card-title">User Created Successfully!!</h5>
      <p class="card-text text-white font-italic" style="font-size: 13px">Hold up, while we prepare you to perform transactions.</p>
      <a class="outline-none mt-2" href="../index.php"><p class="text-center"><span class="text-center text-white mb-0">go to</span> Home</p></a>
    </div>
  </div>
  </div>
    ';
    $userexists = 0;
    $var = "Submitted form";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $balance = $_POST['balance'];
    $user = "SELECT email FROM `user` WHERE email='$email'";
    $userexists = $conn->query($user);
    
    $sqlquery = "INSERT INTO user(name, email,balance) VALUES('$name', '$email','$balance')";
    if(mysqli_num_rows($userexists)){
      $userexists = 1;
      header("refresh:0; url = ../create-user.php?userexists=$userexists");
  }else{
    if(mysqli_query($conn, $sqlquery)){
      $sqlquery1 = "SELECT * from user WHERE email='$email'";
      if($result = mysqli_query($conn, $sqlquery1)){
            $row = $result->fetch_array();
            echo $css;
            $sent_thru_id = $row['id'];
            header("refresh:2.5; url = ../send-money.php?id=$sent_thru_id");
          
      }
  } else{
      echo "Sorry error occured try again!!!";
          header("refresh:2.5; url = ../create-user.php");
  }
  }
  mysqli_close($conn);
}
?>
