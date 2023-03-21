<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.2.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
	  <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!--CSS-->
	  <link rel="stylesheet" type="text/css" href="./css/table.css">
    <link rel="stylesheet" type="text/css" href="./css/navbar.css">

</head>



<body style="background-color :rgb(222,184,135)">

<!--Navigation Bar-->
  <nav class="navbar navbar-expand-md " style="background-color:black">
    <a class="navbar-brand"  style="color :blue;"><b>SPARK FUND BANK</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php" ><b>Home</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewuser.php"><b>View Customer</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transfermoney.php"><b>Transfer Money</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transactionhistory.php"><b>Transaction History</b></a>
        </li>
    </div>
  </nav>

  <header>
	  <div class="container">
      <h2 class="text-center pt-4" style="color : black;">Transaction History</h2><br>
      <div class="table-responsive-sm">
        <table class="table table-hover table-striped table-condensed table-bordered">
          <thead style="color : black;">
            <tr>
              <th class="text-center">S.No.</th>
              <th class="text-center">Sender</th>
              <th class="text-center">Receiver</th>
              <th class="text-center">Amount</th>
              <th class="text-center">Date & Time</th>
            </tr>
          </thead>
          <tbody>
          <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
          ?>

            <tr style="color : black;">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
          <?php
            }
          ?>
          </tbody>
        </table>
      </div>
    </div>
  </header>
  <footer class="text-center mt-5 py-2">
    <p> Designed by <b>Sharad Pawar</b> <br> Spark Bank</p>
  </footer>

</body>
</html>