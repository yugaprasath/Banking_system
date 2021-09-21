<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>
<style>
body
{
	background: rgb(238,174,202);
background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(168,148,233,0.9976365546218487) 100%);
}
</style>
  <body>
  <?php
  include 'navbar.php';
  ?>
  <br><br><br><br><br><br>
      <div class="container-fluid">
     
      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    
                    <br>
                    <a href="user.php"><button style="background-color : #0a6922;font-size: 30px;border-radius: 50px;">User</button></a>
                  </div>
                  <div class="col-md act">
                    
                    <br>
                    <a href="transfer.php"><button style="background-color : #0a6922;font-size: 30px;border-radius: 50px;">Transfer</button></a>
                  </div>
                  <div class="col-md act">
                    
                    <br>
                    <a href="transaction.php"><button style="background-color : #0a6922;font-size: 30px;border-radius: 50px;">Transaction</button></a>
                  </div>
            </div>
      </div>
	  <br><br><br><br><br><br><br><br><br>
      <footer class="text-center mt-5 py-2" style="background-color : black;color:white;">
       <p><b>DHARSHINI PRIYA</b></p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>