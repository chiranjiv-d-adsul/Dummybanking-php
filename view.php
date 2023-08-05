<?php
include 'config.php';
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

</head>
<body>

<!-- nav section -->

<section class="header">
    <a href="/images/logo.jpg">Banking</a>
    
    <nav class="navbar">
        <a href="index.php">Home</a>
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
   <div class="centered"><h1>View Account Details</h1></div>
</div>

<div class="body">

        <h1>Account:</h1>

    <table class="accounts"  >
       
        <tr >
            <th width="100px">Name</th>
            <th width="100px">Email-id</th>
            <th width="100px">Account Number</th>
            <th width="100px">Branch</th>
            <th width="100px">Account Type</th>
            <th width="100px">Phone no.</th>
            
            <th width="100px">Cuurent-Balance</th>
            
        
        </tr>
        <?php
        while ($rows = mysqli_fetch_assoc($result)) {
        ?>
            <tr align="center" height="auto">
                <td><?php echo $rows['name'] ?></td>
                <td><?php echo $rows['email'] ?></td>
                <td><?php echo $rows['id'] ?></td>
                <td><?php echo $rows['branch'] ?></td>
                <td><?php echo $rows['account type'] ?></td>
                <td><?php echo $rows['phone number'] ?></td>
                <td><?php echo $rows['balance'] ?></td>
            
     
            </tr>
        <?php
        }
        ?>     
    </table>
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
