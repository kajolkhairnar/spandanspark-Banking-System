<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <title>Spandan Bank</title>


  </head>
  <style>
.logo
{
   height: 50px;
   width: 100px;
}
  .contact
  {
    padding-top: 0;
    height: 1000px;
    width:  auto;
    background-color:#7FC8A9;

  }
  .property
  {
    background-color: #FF6B6B;
    padding-left: 90px;
    width: auto;
    color: black;
    padding-top: 40px;
    border-radius: 80px;
  }
  .image
  {
    width: 50%;
    height: 850px;
    border-radius: 80px;
  }
  .sizing
  {
    border-radius: 10px;
    width: 300px;
    height: 30px;
  }
  .siz
  {
    border-radius: 10px;
    width: 300px;
    height: 80px;
  }
  .property h3
{
  font-style: normal;
  font-family: cursive;
  font-size: 50px;
  font-weight: bold;
}
.property form
{
  padding-top: 40px;
  padding-left: 150px;
}

  </style>
  <body>
    <?php
        include 'navbar.php';
     ?>
    <div class="contact" class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <img class="image"src="images/3.png" alt="banking background" class="image-fluid">
         </div>
         <div class="property" class="col-lg-6 col-md-6 col-12">
           <h3>Any Query? Contact Us at :</h3>
           <form  action="pro.php" method="POST">
              <div class="form-group">
                  <label>Name:</label><br>
                  <input class="sizing"type="text" name="name" class="form-control" required>
              </div>
              <div class="form-group">
                  <label>Email:</label><br>
                  <input class="sizing" type="email" name="email" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Mobile No : </label><br>
                <input class="sizing" type="tel" name="Mobile number" class="form-control" required>
              <div class="form-group">
                  <label>Message:</label><br>
                  <textarea class="siz" class="form-control" name="message" required></textarea>
              </div>
              <div class="form-group">
              <a href="mail.php" <button type="button" class="btn btn-success" type="submit">Submit</button></a>
              </div>
          </form>
        </div>
       </div>
    </div>
    <br><br>

    <footer class="text-center mt-5 py-2">
    <p>&copy 2021. Made by <b>Kajol Khairnar</b> <br> For the Project of  <b>The Sparks Foundation</b></p>
</footer>
  </body>
</html>
