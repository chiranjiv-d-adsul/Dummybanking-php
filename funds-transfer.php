
<?php
include 'config.php';
?>
<?php

if (isset($_POST['submit'])) {
    $from = $_GET['id'];
    $to = $_POST['receiver'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from customers where id='$from'";
    $query = mysqli_query($conn, $sql);
    $sql1 = mysqli_fetch_array($query);

    $sql = "SELECT * from customers where name='$to'";
    $query = mysqli_query($conn, $sql);
    $sql2 = mysqli_fetch_array($query);




    if (($amount) < 0) {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Values is minimum.")';
        echo '</script>';
    } else if ($amount > $sql1['balance']) {

        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';
        echo '</script>';
    } else if ($amount == 0) {

        echo "<script type='text/javascript'>";
        echo "alert('Oops! Zero')";
        echo "</script>";
    } else {


        $newbalance = $sql1['balance'] - $amount;
        $sql = "UPDATE customers set balance=$newbalance where id='$from'";
        mysqli_query($conn, $sql);



        $newbalance = $sql2['balance'] + $amount;
        $sql = "UPDATE customers set balance=$newbalance where name='$to'";
        mysqli_query($conn, $sql);
        
        echo "<script type='text/javascript'>";
        echo "alert('Transaction sucessful.')";
        echo "</script>";
       
        $newbalance= 0;
        $amount =0;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <title>Basic Banking System</title>
</head>

<body>

<!-- nav section -->

<section class="header">
    <a href="/images/logo.jpg">Banking</a>
    
    <nav class="navbar">
        <a href="index.php" >Home</a>
        <a href="accounts.php">Accounts</a>
        <a href="/dist/contact us.php">Contact us</a>   
       
    </nav>
    <div id="menu-btn" class="fasfa-bars"><img src="/images/menu.png" alt=""class="icons"></div>
</section>
 


<?php
    include 'config.php';

    $sid=$_GET['id'];
    $sql = "SELECT * FROM customers  where id=$sid";
    $result = mysqli_query($conn, $sql);
    ?>
 <div class="info">
   <img src="/images/view.jpg"  id="image"  alt="" width="100%" height="100px">
   <div class="centered"><h1>TRANSFER MONEY</h1></div>
</div>   
<div class="body">

        <h1>Account:</h1>

    <table class="accounts"  >
       
        <tr >
            <th width="100px">Name</th>
            <th width="100px">Email-id</th>
            <th width="100px">Account No.</th>
     
            <th width="100px"> Current-Balance</th>
            <th width="100px">Funds </th>
        </tr>
        <?php
        while ($rows = mysqli_fetch_assoc($result)) {
        ?>
            <tr align="center" height="auto">
                <td><?php echo $rows['name'] ?></td>
                <td><?php echo $rows['email'] ?></td>
                <td><?php echo $rows['id'] ?></td>
          
                <td><?php echo $rows['balance'] ?></td>
                <td><a href="view.php?id= <?php echo $rows['id'] ;?>">View</a>
     
            </tr>
        <?php
        }
        ?>     
    </table>
</div>


    <div class="transfer">
        <h1>Transfer Money : </h1>
        <form method="POST">
            <div class="detail">
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  customers where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <label class="sender" for="sender"> The sender : </label>
<h2><?php echo $rows['id'];?></h2>
               
                    
          
                <br>
                <?php
 $sql = "SELECT * FROM customers  ";
    $result = mysqli_query($conn, $sql);
    ?> 
                <label for="receiver"> Receivers :</label>
                <select name="receiver" id="receiver">
                <option value="" disabled selected hidden>Choose the Receiver</option>
                    <?php
                    mysqli_data_seek($result, 0); // Reset the result pointer to the beginning
                    while ($rows = mysqli_fetch_assoc($result)) {
                        echo '<option value="' . $rows['name'] . '">' . $rows['name'] . ' (Balance: ' . $rows['balance'] . ')</option>';
                    }
                    ?>
                </select>
                <br>
                <label for="amount">Amount :</label>
                <input type="number" name="amount" value="amount" placeholder="Enter the Amount">
                

                <div ><button id="btn" type="submit" name="submit" value="submit">TRANSFER</button></div>


            </div>
        </form>
    </div>














    <footer>
        <div class="footer">

        <ul id="ul1">
           <h1>About us : </h1>
           <p>The main aim of this project is it gives information about the functioning of databases in banking system. <br>
                It manages all the transactions like transferring money,viewing accounts details,etc.</p>
        </ul>
        <ul id="ul2">
            <li><a href="">instagram</a></li>
            <li><a href="">facebook</a></li>
            <li><a href="">linkedin</a></li>
            <li><a href="">youtube</a></li>
        </ul>

        <ul id="ul3">
            <li><a href="">home</a></li>
            <li><a href="">account</a></li>
            <li><a href="">contact</a></li>

        </ul>
        </div>
    </footer>
</body>
</body>
</html>
