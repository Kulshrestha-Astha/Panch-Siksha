<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enroll</title>

    <!-- swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!-- header section starts -->
    <section class="header">
        <a href="home.php" class="logo">PANCH SIKSHA</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="physical.php">Physical</a>
            <a href="aesthetic.php">Aesthetic</a>
            <a href="practical.php">Practical</a>
            <a href="moral.php">Moral</a>
            <a href="intellectual.php">Intellectual</a>
            <a href="enroll.php">Enroll</a>

        </nav>
<div id="menu-btn" class="fas fa-bars"></div>







    </section>
<!-- header section ends -->

 <div class="heading" style="background: url(images/header-bg-3.jpeg) no-repeat">
<h1>Enroll now</h1>
</div>

<!-- booking section starts -->
<section class="booking">

<h1 class="heading-title"> Enroll Yourself!</h1>

<form action="enroll_form.php" method="post" class="enroll_form">

<div class="flex">
    <div class="inputBox">
        <span>name :</span>
        <input type="text" placeholder="enter your name" name="name">
    </div>
    <div class="inputBox">
        <span>age :</span>
        <input type="text" placeholder="enter your age" name="age">
    </div>
    <div class="inputBox">
        <span>course :</span>
        <input type="text" placeholder="enter your course" name="course">
    </div>
    <div class="inputBox">
        <span>email :</span>
        <input type="email" placeholder="enter your email" name="email">
    </div>
    <div class="inputBox">
        <span>phone :</span>
        <input type="number" placeholder="enter your contact number" name="phone">
    </div>
    <div class="inputBox">
        <span>Hostel_name :</span>
        <input type="text" placeholder="enter your hostel name" name="hostel_name">
    </div>
    
    <div class="inputBox">
        <span>Activity :</span>
        <input type="text" placeholder="enter your activity" name="activity">
    </div>
    <input type="submit" value="submit" class="btn" name="send">
</div>

</form>
</section>




















<!-- booking section ends -->


















<!-- footer section starts -->
<section class="footer">

   <div class="box-container">

            <div class="box">
            <h3>quick links</h3>    
            <a href="home.php"> <i class="fas fa-angle-right"></i>Home</a>
            <a href="physical.php"> <i class="fas fa-angle-right"></i>Physical</a>
            <a href="aesthetic.php"> <i class="fas fa-angle-right"></i>Aesthetic</a>
            <a href="practical.php"> <i class="fas fa-angle-right"></i>Practical</a>
            <a href="moral.php"> <i class="fas fa-angle-right"></i>Moral</a>
            <a href="intellectual.php"> <i class="fas fa-angle-right"></i>Intellectual</a> 
            <a href="enroll.php"> <i class="fas fa-angle-right"></i>Enroll</a>  
            </div>

            <div class="box">
            <h3>extra links</h3>    
            <a href="#"> <i class="fas fa-angle-right"></i>Ask questions</a>
            </div>

            <div class="box">
            <h3>contact info</h3>    
            <a href="#"> <i class="fas fa-phone"></i> +124-456-7890</a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333</a>
            <a href="#"> <i class="fas fa-envelope"></i> btbte20164_astha@banasthali.in</a>
            <a href="#"> <i class="fas fa-map"></i> Jaipur,Rajasthan-304022</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook</a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>
            </div>


   </div>

  <div class="credit">created by <span>Astha Kulshrestha </span>| all rights reserved!</div>

</section>

<!-- footer section ends -->


   
    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
    <script src="js/script.js"></script>
</body>
</html>