<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Spandan Banking Systems</title>
  </head>
  <style media="screen">
    .logo
    {
      height: 50px;
      width: 100px;
    }
    .card_image2
    {
      height: 200px;
    }
  .cards
  {
    padding-left: 80px;
    padding-right: 80px;
  }
  </style>
  <body>
    <link rel="stylesheet" href="css/styles.css">
    <style>
      .logo
      {
        height: 50px;
        width: 100px;
      }
    </style>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <table>
          <tr>
            <td><img class="logo"src="images/hh_logo.jpg" alt="banking background" class="image-fluid"></td>
            <td><a class="spandan" class="navbar-brand" href="index.php">Spandan Bank</a></td>
          </tr>
        </table>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
        <button type="button" name="button" class="nav-button"><a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a></button>
        </li>
        <li class="nav-item">
          <button type="button" name="button" class="nav-button"><a class="nav-link" href="#About index.php">About Us</a></button>
        </li>

        <li class="nav-item">
      <button type="button" name="button" class="nav-button" ><a class="nav-link" href="contact.php" class="font">Contact Us</a></button>
        </li>
      </ul>

    </div>
    </nav>


<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img3.jpg" alt="online transaction" height="500" width="1100">
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpg" alt="E-Banking" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/img1.jpg" alt="privacy" height="500" width="1100">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
  <div class="title" class="py-5">
    <h1  class="text-center" id="About">About Us</h1>
  </div>
  <div class="money_transfer" class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/images2.jpg" alt="bank" class="image-fluid">
       </div>
       <div class="col-lg-6 col-md-6 col-12">
         <h2 >Spandan Banking Systems</h2><br>
         <p>No need of standing in long queues of bank.Spandan believes in your safety and security.Handle your account now on your mobile phone.Transfer money with complete security and privacy.No need of risk and fears at all.E-Banking provides you with lots of facilities and provisions.</p>
         <div class="partition">
           <button type="button" name="button" class="button"><a href="new_user.php">New User</a></button>
         </div>
      </div>
     </div>
  </div>
</section>
<section class="my-5">
       <div class="title-2" class="py-5">
               <h1 class="text-center">Services</h1>
       </div>
       <div class="row">
            <div class="col-lg-4 col-md-4 col-12" class="card">
                    <img class="card-img-top" src="images/people.jpg" height="340px" alt="Card image"><br>
                    <div class="cards" class="card-img-overlay"><br>
                        <h4 class="card-title">Customers</h4>
                      <a href="transfermoney.php" class="btn btn-primary">Our Customers</a>
                    </div>
           </div>
                  <div class="col-lg-4 col-md-4 col-12" class="card">
                            <img class="card-img-top" src="images/checkbox.gif" height="340px" alt="Card image"><br>


                                      <div class="cards" class="card-img-overlay"><br>
                                        <h4 class="card-title">Transaction Details</h4>
                                      <a href="transactionhistory.php"  class="btn btn-primary">Transaction History</a>
                                    </div>
                </div>
                      <div class="col-lg-4 col-md-4 col-12" class="card">
                           <img class="card-img-top" src="images/23.jpg" height="340px" alt="Card image"><br>
                                <div class="cards" class="card-img-overlay"><br>
                                      <h4 class="card-title">Donate Orphans</h4>
                                      <a href="transfermoney.php" class="btn btn-primary">Donate Orphans</a>
                                </div>
                     </div>
            </div>
      </div>
</section>
<!-- FOOTER-->


        <br><br>

        <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Kajol Khairnar</b> <br> For the Project of  <b>The Sparks Foundation</b></p>
    </footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
