<?php
include 'config.php';

error_reporting(0);

if(isset($_POST['submit'])){
    $user = $_POST['yourname'];
    $email = $_POST['email'];
    $comments = ($_POST['comments']);

    $sql = "INSERT INTO comments (yourname, email, message)
            VALUES ('$user', '$email', '$comments')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script>alert('Thanks for posting.')</script";
    }

}
   


?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>
    <script src="swiper.min.js"></script>
    <link rel="stylesheet" href="comments.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="responisve.css">
    <link rel="stylesheet" href="swiper.min.css">
    <link rel="shortcut icon" href="/img/fav-icon.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>


<body>

    <div class="nav">
        <header id="header">
            <a href="#" class="logo">Ayush Sites</a>
            <div class="toggle"></div>
            <ul class="navigation">
                <li><a href="index.html">Home</a></li>
                <li><a href="/about.html">About Me</a></li>
                <li><a href="#"  class="active">Comments</a></li>
                <li><a href="/create.html">Create</a></li>
                <li><a href="/blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </header>
    </div>
    <div class="parallax1">

        <div class="form-body">
            <div class="container">

                <div class="form-container">
                    <form action="" method="POST" class="comments-form">
                        <p class="login-text">Post a Comment</p>
                        <div class="input-group">
                            <input type="text" name="yourname" id="yourname" class="allfields" placeholder="Your Name"
                                required>
                        </div>
                        <div class="input-group">
                            <input type="email" name="email" id="email" placeholder="Email" class="allfields" required>
                        </div>
                        <div class="input-group" id="cooment-group">
                            <textarea type="comments" name="comments" id="comments" class="allfields" placeholder="Comment" required></textarea>

                        </div>
                        <div class="input-group">
                            <button class="btn" name="submit">Post</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-container">
        <div class="footer-heading">
            <div class="heading-container">
                <div class="main-heading-footer">
                    Expand Your Reach with Us Now!

                </div>
                <a href="/create.html" style="text-decoration: none; color: #fff;">
                    <div class="two-col-link sec-color  vanish">


                        Know More


                    </div>
                </a>
            </div>
        </div>
        <footer>
            <div class="waves">
                <div class="wave" id="wave1"></div>
                <div class="wave" id="wave2"></div>
                <div class="wave" id="wave3"></div>
                <div class="wave" id="wave4"></div>
            </div>
            <ul class="social_icon">
                <li><a href="https://www.instagram.com/astonishing_ayush/" target="_blank">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a></li>
                <li><a href="https://www.twitter.com/Ayush__Yadav__" target="_blank">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a></li>
            </ul>
            <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="create.html">Create</a></li>
                <li><a href="about.html">About Me</a></li>
                <li><a href="blog.html">Blog</a></li>
            </ul>
            <p>??Ayush Sites | All Rights Reserved</p>
        </footer>
    </div>
</body>


<script>

    const toggleMenu = document.querySelector('.toggle');
    const navigation = document.querySelector('.navigation')
    toggleMenu.onclick = function () {
        toggleMenu.classList.toggle('active')
        navigation.classList.toggle('active')
    }

    window.addEventListener("scroll", function () {
        var header = document.querySelector('header')
        header.classList.toggle('sticky', window.scrollY > 0)
    })

    window.addEventListener("scroll", function () {
        var logo = document.querySelector('.logo')
        logo.classList.toggle('sticky', window.scrollY > 0)
    })


</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</html>