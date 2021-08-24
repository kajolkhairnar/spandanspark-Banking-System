<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $from = $_GET['Id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

       $sql = "SELECT * from `money_transaction`where Id=$from";
    $mysqli_query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($mysqli_query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from `money_transaction` where Id=$to";
    $mysqli_query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($mysqli_query);



    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Transaction Not Possible, Please enter correct value")';  // showing an alert box.
        echo '</script>';
    }



    // constraint to check insufficient balance.
    else if($amount > $sql1['Bank_Balance'])
    {

        echo '<script type="text/javascript">';
        echo ' alert("Opps! Insufficient Balance..")';  // showing an alert box.
        echo '</script>';
    }



    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Cannot Transact')";
         echo "</script>";
     }


    else {

                // deducting amount from sender's account
                $newbalance1 = $sql1['Bank_Balance'] - $amount;
                $sql = "UPDATE 'money_transaction' set Bank_Balance=$newbalance where Id=$from";
                $sql1['Bank_Balance']=$newbalance;
                mysqli_query($conn,$sql);


                // adding amount to reciever's account
                $newbalance2 = $sql2['Bank_Balance'] + $amount;
                $sql = "UPDATE 'money_transaction' set Bank_Balance=$newbalance where Id=$to";
                mysqli_query($conn,$sql);

                $sender = $sql1['Name'];
                $receiver = $sql2['Name'];
                $sql2['Bank_Balance']=$newbalance2;
                $sql = "INSERT INTO transaction (`Sender`, `Receiver`, `Bank_Balance`) VALUES ('$sender','$receiver','$amount')";
                $mysqli_query=mysqli_query($conn,$sql);
                if($mysqli_query){
                    echo "<script> alert('Transaction Successful');
                                    window.location='transactionhistory.php';
                          </script>";
                }
                $amount =0;
        }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <style media="screen">
      .transferbutton
      {
        height: 50px;
        width: 130px;
        background-color: #87A8A4;
        color: black;
        border-radius: 15px;
        border: 5px;
      }
      .transferbutton:hover
      {
        transition: 2.5s;
        color: white;
        background_color: black;
      }
    </style>
</head>

<body>
<div class="transfermoney">
<?php
  include 'navbar.php';
?>

	<div class="container">
        <h2 class="text-center pt-4">Transaction</h2>
            <?php
                include 'config.php';
                $sid=$_GET['Id'];
                  $sql = "SELECT * FROM `money_transaction` where Id=$sid";
                $mysqli_result=mysqli_query($conn,$sql);
                if(!$mysqli_result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($mysqli_result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr>
                    <td class="py-2"><?php echo $rows['Id'] ?></td>
                    <td class="py-2"><?php echo $rows['Name'] ?></td>
                    <td class="py-2"><?php echo $rows['Email'] ?></td>
                    <td class="py-2"><?php echo $rows['Bank_Balance'] ?></td>
                </tr>
            </table>
        </div>
        <br>
        <label>Transfer To:</label>
        <select Name="to" class="form-control" required>
            <option value="">Choose</option>
            <?php
                include 'config.php';
                $sid=$_GET['Id'];
                $sql = "SELECT * FROM `money_transaction` where Id!=$sid";
                $mysqli_result=mysqli_query($conn,$sql);
                if(!$mysqli_result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($mysqli_result)) {
            ?>
                <option class="table" value="<?php echo $rows['Id'];?>" >

                    <?php echo $rows['Name'] ;?> (Bank_Balance:
                    <?php echo $rows['Bank_Balance'] ;?> )

                </option>
            <?php
                }
            ?>
            <div>
        </select>
        <br>
        <br>
            <label>Amount:</label>
            <input type="number" class="form-control" name="amount" required>
            <br>
                  <div class="text-center">
            <button class="transferbutton" name="submit" type="submit" Id="myBtn" >Transfer</button>
          </div>
        </form>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</div>
</body>
</html>
