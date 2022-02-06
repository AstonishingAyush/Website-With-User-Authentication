<?php 

session_start();

include 'config.php';

if (!isset($_SESSION['email'])) {
    header("Location: login-signup.php");
}

if (!isset($_SESSION['yourname'])) {
    header("Location: login-signup.php");
}




if(isset($_POST['submit'])){
    $user = ($_SESSION['yourname']);
    $email = ($_SESSION['email']);
    $plan = ($_POST['plan']);

    $sql = "INSERT INTO plans (yourname, email, plan)
            VALUES ('$user', '$email', '$plan')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script>alert('Thank You. We will contact you soon.')</script";
    }else{
         echo "<script>alert('something went wrong')</script";
    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo"<title>Welcome " . $_SESSION['yourname'] ."</title>"; ?>
    <script src="swiper.min.js"></script>
    <link rel="stylesheet" href="welcome.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="responisve.css">
    <link rel="stylesheet" href="swiper.min.css">
    <link rel="shortcut icon" href="/img/fav-icon.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body onscroll="myScroll();">
    <div class="nav">
        <header id="header">
            <a href="#" class="logo">
            <?php echo"<ion-icon name='person-sharp'></ion-icon>". " " . $_SESSION['email'] ; ?>
            </a>
            <div class="toggle"></div>
            <ul class="navigation">
                <li><a href="logout.php" class="active">
                        <ion-icon name="exit-outline"></ion-icon> Logout
                    </a></li>
            </ul>
        </header>
    </div>

    <div class="parallax1">
    <?php echo "<div class='heading'>Welcome " . $_SESSION['yourname'] . "</div>"; ?>
        <div class="for-animation" id="main-parallax"></div>
    </div>

    <section class="dark2" id="animate-section">
        <h1 class="subhead2">30 Day Free for all our plans.</h1>
        
    </section>

    <section class="dark">
        <h1 class="subhead">Choose the best plan suitable for you</h1>
        
    </section>


    <form action="" method="POST" class="login-email">
        <section class="dark padding-low ">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <div class="card">
                            <div class="sliderText">
                                <h3>Basic</h3>
                                <h3>&#x20B9; 500/month</h3>
                                <p>&#x20B9; 3000 for lifetime access</p>
                            </div>
                            <div class="content">
                                <p>
                                <ul>
                                    <li>Upto 5 Pages</li>
                                    <li>No Domain</li>
                                    <li>Limited Cloud Access</li>
                                    <li>1 Database</li>
                                </ul>
                                </p>
                                <label href="/crete.html" style="text-decoration: none; color: #000;">
                                    <input type="radio" name="plan" id="first" value="first" required>
                                    Select
                                </label>
                            </div>
                        </div>
                    </div>



                    <div class="swiper-slide">

                        <div class="card">
                            <div class="sliderText">
                                <h3>Standard</h3>
                                <h3>&#x20B9; 900/month</h3>
                                <p>&#x20B9; 5000 for lifetime access</p>
                            </div>
                            <div class="content">
                                <p>
                                <ul>
                                    <li>Upto 20 Pages</li>
                                    <li>Free Domain</li>
                                    <li>Full Cloud Access</li>
                                    <li>10 Databases</li>
                                </ul>
                                </p>
                                <label href="/crete.html" style="text-decoration: none; color: #000;">
                                    <input type="radio" name="plan" id="second" value="second" required>
                                    Select
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide">

                        <div class="card">
                            <div class="sliderText">
                                <h3>Premium</h3>
                                <h3>&#x20B9; 1500/month</h3>
                                <p>&#x20B9; 6000 for lifetime access</p>
                            </div>
                            <div class="content">
                                <p>
                                <ul>
                                    <li>Upto 50 Pages</li>
                                    <li>Multiple Domains</li>
                                    <li>Full Cloud Access</li>
                                    <li>100 Database</li>
                                </ul>
                                </p>
                                <label href="/crete.html" style="text-decoration: none; color: #000;">
                                    <input type="radio" name="plan" id="third" value="third" required>
                                    Select
                                </label>
                            </div>
                        </div>
                    </div>


                </div>
                
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
            <button class="btn" name="submit">Submit</button>
        </section>
    </form>

<br>
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
            <p>©Ayush Sites | All Rights Reserved</p>
        </footer>
    </div>







</body>
<script>

    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 30,
            strech: 0,
            depth: 200,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });


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

    let parallax = document.querySelector('#main-parallax');
    let secScroll = document.querySelector('#animate-section')

    const position = parallax.offsetTop;
    function myScroll() {
        if (window.scrollY >= position) {
            secScroll.classList.add('scroll')
        } else {
            secScroll.classList.remove('scroll')
        }
    }
</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</html>