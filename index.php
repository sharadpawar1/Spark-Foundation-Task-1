<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body style="background-color :#00BFFF">

    <!-- Navigation Bar-->
    <nav class="navbar navbar-expand-md " style="background-color:black">
      <a class="navbar-brand"  style="color :blue;"><b>SPARKS BANK</b></a>
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
       </ul>
      </div>
    </nav>

    <!--Header Section-->
    <header  class="main py-5" id="main">
	    <div class="container-fluid py-5">
		    <div class="row py-5">
			    <div class = "col-lg-12 col-mg-12 py-5 mr-auto">
			      <marquee behavior="scroll" direction="left" style="color:yellow"><b>Hello Customer, Welcome to Spark Bank<b></marquee>
				    <h4>Welcome to</h4>
				    <h3><b>Spark Bank</b></h3>
				    <marquee behavior="scroll" direction="left" style="color:#808000;"> <b>View Customer </b> button to see the customer list</marquee>
				    <marquee behavior="scroll" direction="left" style="color:#808000;"> <b>Make a Transaction</b> button to make the transaction</marquee>
				    <marquee behavior="scroll" direction="left" style="color:#808000;"> <b>Transaction history</b> to see Transaction history</marquee>
			    </div>
		   </div>
	    </div>
    </header>
      
    <!-- Activity section -->
	  <article>
		  <div class="container-fluid py-5">
        <div class="row activity text-center">
          <div class="col-md act">
            <img src="./images/users.jpg" class="img-fluid"><br>
            <a href="viewuser.php"><button style="background-color : #2785C4;">View Customer</button></a>
          </div>
          <div class="col-md act">
            <img src="./images/transfer.jpg" class="img-fluid"><br>
            <a href="transfermoney.php"><button style="background-color : #2785C4;">Make a Transaction</button></a>
          </div>
          <div class="col-md act">
            <img src="./images/history.png" class="img-fluid"><br>
            <a href="transactionhistory.php"><button style="background-color : #2785C4;">Transaction History</button></a>
          </div>
        </div>
      </div>
	  </article>

    <!--Footer section-->
    <footer class="text-center mt-5 py-2" style="background-color:rgb(135,206,250);">
      <p>Designed by <b>Sharad Pawar</b> <br> Spark Bank</p>
    </footer>
  </body>
</html>