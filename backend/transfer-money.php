<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles/css.css">
<?php
include_once 'config.php';
if (isset($_POST['submit'])) {
  $css = '
    <div class="d-flex justify-content-center">
    <div class="card border-success mb-3" style="width: 310px; margin-top: 200px;">
  <div class="card-header text-center">
  <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-check-circle text-info" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
</svg>
  </div>
  <div class="card-body text-success">
  <h5 class="card-title text-center mb-0">Transaction Successful!!</h5>
  <p class="card-text text-muted font-italic" style="font-size: 13px">Amount is transferred to the receiver will soon reflect in respective accounts.</p>
  <a style="outline:none !important; text-decoration: none !important;" class="outline-none mt-2" href="../index.php"><p class="text-center"><span class="text-center text-dark mb-0">go to</span> Home</p></a>
  </div>
</div>
  </div>
    ';

  $sender_id = $_GET['uid'];
  $receiver_id = $_POST['receive'];
  $balamt = $_POST['amt'];
  $query1 = "SELECT * FROM `user` WHERE id='$sender_id'";
  if ($result = mysqli_query($conn, $query1)) {
    $row =  $result->fetch_array();
    if ($balamt <= $row['balance']) {
      $transfer_amt = $row['balance'] - $balamt;
      $updateFirst = $conn->query("UPDATE user SET balance = $transfer_amt WHERE id = $sender_id");
      $query2 = "SELECT * FROM `user` WHERE id='$receiver_id'";
      if ($result1 = mysqli_query($conn, $query2)) {
        $row1 =  $result1->fetch_array();
        $received_amt = $row1['balance'] + $balamt;
        $updateSecond = $conn->query("UPDATE user SET balance = $received_amt WHERE id = $receiver_id");
        $insertHistory = $conn->query("INSERT INTO transaction_record(sender, receiver, amount,sentdate) VALUES ('$row[1]', '$row1[1]', '$balamt', CURRENT_TIMESTAMP)");
        echo $css;
        header("refresh:2; url = ../transaction-history.php");
      } else {
        echo "Sorry error occured try again!!!";
        header("refresh:2.5; url = ../customers.php");
      }
    } else {
      echo "<script>alert('Amount is too big!!!');
      window.location.href = '../send-money.php?id=$sender_id';
      </script>";
    }
  } else {
    echo "Sorry error occured try again!!!";
    header("refresh:2.5; url = ../customers.php");
  }
}

?>