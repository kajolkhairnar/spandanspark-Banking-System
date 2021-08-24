<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<style media="screen">
  .check_box
  {
    height: 35px;
    width: 35px;
  }
</style>
<body>
<div class="transfermoney">
<?php
  include 'navbar.php';
?>

	<div class="container">
        <h2 class="text-center pt-4">Transaction History</h2>

       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">Sr.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center"></th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="SELECT* from `transaction`";

            $mysqli_query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($mysqli_query))
            {
        ?>

            <tr>
            <td class="py-2"><?php echo $rows['Sr.No']; ?></td>
            <td class="py-2"><?php echo $rows['Sender']; ?></td>
            <td class="py-2"><?php echo $rows['Receiver']; ?></td>
            <td class="py-2"><?php echo $rows['Bank_Balance']; ?> </td>
            <td  class="check_box" class="py-2"><img class="check_box"src="images/check-circle.gif" alt="done"></td>
            </tr>
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</div>
</body>
</html>
