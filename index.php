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
    <header class="header">
        <h1>BANKING MANAGEMENT SYSTEM</h1>
        <p>Presented By Chiranjiv Dhanraj Adsul.</p>
   </header>

   <!-- nav section -->

<section class="header">
    <a href="/index.php">Banking</a>
    
    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="accounts.php">Accounts</a>
    	<a href="contactus.php">Contact us</a>
       
    </nav>
    <div id="menu-btn" class="fasfa-bars"><img src="/images/menu.png" alt=""class="icons"></div>
</section>

    <div class="content">
                <div class="slider">
                
                        <div class="slider-img">
                            <a href="index.html"><img src="/images/slider1.jpg" alt="slider1" width="600px"  height="300px"  style="margin: 50px;"></a>
                        </div>
                        <div class="slider-img">
                            <a href="index.html"><img src="/images/slider2.jpg" alt="slider2" width="600px"  height="300px"  style="margin: 50px;"></a>
                        </div>
                        <div class="slider-img">
                            <a href="index.html"><img src="/images/slider3.png" alt="slider3" width="600px"  height="300px"  style="margin: 50px;"></a>
                        </div>
                        <div class="slider-img">
                            <a href="index.html"><img src="/images/slider4.jpg" alt="slider4" width="600px"  height="300px"  style="margin: 50px;"></a>
                        </div>
                        <div class="aboutus">
                    <h2>About us</h2>
                    <p>Hi there ! <br> I am CHIRANJIV DHANRAJ ADSUL <br> This is my Spark foundation internship project-TASK:01. <br>
                        In this project, I used Frontend language:- HTML , CSS & JS with Backend language:- PHP and Database:- MYSQL.
                        
                    </p>
                    <p>1.The main aim of this project is it gives information about the functioning of databases in banking system. <br>
                       2.It manages all the transactions like transferring money,viewing accounts details,etc.</p>
                   
                </div> 
                </div>
              

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
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("slider-img");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 3000); // Change image every  
}
</script>
</html>

