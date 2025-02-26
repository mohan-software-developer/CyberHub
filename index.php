<?php
require 'config.php';
if(!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}
else{
    header("Location: login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CyberHub</title>
  <link rel="icon" type="image/x-icon" href="./imgs/logochicon.png">
  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Source+Sans+Pro:wght@600;700&display=swap"
    rel="stylesheet">

  

    
</head>

<body id="top">

    <!--
    cursor settings
  -->
  <div class="cursor-dot" data-cursor-dot></div>
  <div class="cursor_outline" data-cursor-outline></div>


  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#">
        <h1 class="logo">CyberHub</h1>
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <a href="#" class="logo">CyberHub</a>

          <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="index.php" class="navbar-link" data-navbar-link>Home</a>
          </li>

          <li class="navbar-item">
            <a href="category.php" class="navbar-link" data-navbar-link>Catogory</a>
          </li>

          <li class="navbar-item">
            <a href="carrierguide.php" class="navbar-link" data-navbar-link>Carrier Guidance</a>
          </li>

          <li class="navbar-item">
            <a href="index.php" class="navbar-link" data-navbar-link>About</a>
          </li>

          <li class="navbar-item">
            <a href="profile.php" class="navbar-link" data-navbar-link>Profile</a>
          </li>

          <li class="navbar-item">
            <a href="logout.php" class="navbar-link" data-navbar-link>Logout</a>
          </li>

        </ul>

      </nav>

      <a style="color:#000" href="#" class="btn">
        <ion-icon name="chevron-forward-outline" aria-hidden="true"></ion-icon>

        <span><?php echo $row["name"] ?></span>
      </a>

      <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">Unlocking Cyber Potential at CyberHub</p>

            <h2 class="h2 hero-title">Welcome to CyberHub <?php echo $row["name"]; ?></h2>

            <p class="hero-text">
              Welcome to CyberHub, your go-to web app for up-to-date Cyber Pratices. Our app is designed to provide you
              with accurate and reliable data, no matter where you are in the world.
            </p>

            <button style="color:#000;" class="btn" onclick="window.location.href='#about'" >Learn More</button>

          </div>

          <figure class="hero-banner">
            <img src="./assets/imgs/cybermanicon.png" width="694" height="529" loading="lazy" alt="hero-banner"
              class="w-100 banner-animation">
          </figure>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about">
        <div class="container">

          <figure class="about-banner">
            <img  src="https://usagif.com/wp-content/uploads/gif-for-presentation-84.gif.webp" width="700" height="532" loading="lazy" alt="about banner"
              class="w-100 banner-animation">
          </figure>

          <div class="about-content">

            <h2 class="h2 section-title underline">Are you ready to be Cybersecurity Specialist

            </h2>

            <p class="about-text">
              Our curriculum covers a wide spectrum of cybersecurity topics, from the fundamentals of network security
              to advanced ethical hacking techniques. We ensure that learners gain a holistic understanding of the
              field, empowering them to tackle real-world challenges.

            </p>

            <p class="about-text">
              Reinforce your learning through our quiz section. Test your knowledge, track your progress, and gain
              valuable insights into your strengths and areas for improvement. Our quizzes are designed to challenge you
              and help you grow.
            </p>

            <ul class="stats-list">

              <li class="stats-card">
                <p class="h3 stats-title">5+</p>

                <p class="stats-text">Industry Learning modules</p>
              </li>

              <li class="stats-card">
                <p class="h3 stats-title">20+</p>

                <p class="stats-text">Interactive cyber games</p>
              </li>

              <li class="stats-card">
                <p class="h3 stats-title">6+</p>

                <p class="stats-text">Pratice sections</p>
              </li>

            </ul>

          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" id="services">
        <div class="container">

          <h2 class="h2 section-title underline">Our Speciallization</h2>

          <ul class="service-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="telescope-outline"></ion-icon>
                </div>

                <h3 class="h3 title">Curriculum & Research</h3>

                <p class="text">
                Our curriculum covers a wide spectrum of cybersecurity topics, from the fundamentals of network security
                to advanced ethical hacking techniques. We ensure that learners gain a holistic understanding of the
                field, empowering them to tackle real-world challenges.
                </p>

                <!-- <button class="card-btn" aria-label="Show More">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button> -->

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="desktop-outline"></ion-icon>
                </div>

                <h3 class="h3 title">Test Section</h3>

                <p class="text">
                Reinforce your learning through our quiz section. Test your knowledge, track your progress, and gain
                valuable insights into your strengths and areas for improvement. Our quizzes are designed to challenge you
                and help you grow.
                </p>

                <!-- <button class="card-btn" aria-label="Show More">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button> -->

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="globe-outline"></ion-icon>
                </div>

                <h3 class="h3 title">Web Solution</h3>

                <p class="text">
                  Mauris ut felis malesuada eros varius tristique a at orci. Nulla vulputate, leo sit amet rhoncus
                  suscipit, enim ex
                  venenatis ipsum, et porttitor.
                </p>

                <!-- <button class="card-btn" aria-label="Show More">
                  <ion-icon name="chevron-forward-outline"></ion-icon>
                </button> -->

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #FEATURES
      -->

      <section class="section features" id="features">
        <div class="container">

          <h2 class="h2 section-title underline">Our Features</h2>

          <ul class="features-list">

            <li>
              <div class="features-card">

                <div class="icon">
                  <ion-icon name="bulb-outline"></ion-icon>
                </div>

                <div class="content">
                  <h3 class="h3 title">Curriculum.</h3>

                  <p class="text">
                    Our curriculum covers a wide spectrum of cybersecurity topics, from the fundamentals of network
                    security to advanced ethical hacking techniques.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="features-card">

                <div class="icon">
                  <ion-icon name="color-palette-outline"></ion-icon>
                </div>

                <div class="content">
                  <h3 class="h3 title">Test Section</h3>

                  <p class="text">
                    Reinforce your learning through our quiz section. Test your knowledge, track your progress, and gain
                    valuable insights into your strengths and areas for improvement.
                  </p>
                </div>

              </div>
            </li>

          </ul>

          <figure class="features-banner">
            <img src="./assets/imgs/cybermanicon.png" width="369" height="318" loading="lazy" alt="Features Banner"
              class="w-100 banner-animation">
          </figure>

          <ul class="features-list">

            <li>
              <div class="features-card">

                <div class="icon">
                  <ion-icon name="code-slash-outline"></ion-icon>
                </div>

                <div class="content">
                  <h3 class="h3 title">Interactive conversations</h3>

                  <p class="text">
                    Praesent tincidunt congue est ut hendrerit. Pellentesque et eros sit amet ipsum venenatis.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="features-card">

                <div class="icon">
                  <ion-icon name="rocket-outline"></ion-icon>
                </div>

                <div class="content">
                  <h3 class="h3 title">Hands on games</h3>

                  <p class="text">
                    Praesent tincidunt congue est ut hendrerit. Pellentesque et eros sit amet ipsum venenatis.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #BLOG
      -->

      <section class="section blog" id="blog">
        <div class="container">

          <h2 class="h2 section-title underline">Our Blog & News</h2>

          <ul class="blog-list">

            <li>
              <div class="blog-card">

                <figure class="banner">
                  <a href="#">
                    <img
                      src="https://media.wired.com/photos/643995bde73b46a1cd347824/3:2/w_960,c_limit/Are-You-Being-Tracked-by-an-AirTag--Here%E2%80%99s-How-to-Check-Gear-GettyImages-1239635536.jpg"
                      width="750" height="350" loading="lazy"
                      alt="Vestibulum massa arcu, consectetu pellentesque scelerisque." class="img-cover">
                  </a>
                </figure>

                <div class="content">

                  <h3 class="h3 title">
                    <a href="#">
                      Are You Being Tracked by an AirTag? Here’s How to Check
                    </a>
                  </h3>

                  <p class="text">
                    If you’re worried that one of Apple’s trackers is following you without consent, try these tips.
                  </p>

                  <div class="meta">

                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-03-07">20 Aug, 2023</time>
                    </div>

                    <data value="15">Cyber-news</data>

                    <!-- <button class="comment" aria-label="Comment">
                      <ion-icon name="chatbubble-outline"></ion-icon>

                      
                    </button>

                    <button class="share" aria-label="Share">
                      <ion-icon name="share-social-outline"></ion-icon>
                    </button> -->

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="banner">
                  <a href="#">
                    <img
                      src="https://media.wired.com/photos/64cd8e5082d37ced55dff7bf/3:2/w_960,c_limit/How-to-Delete-Passcode-Texts-Security-GettyImages-1360338794.jpg"
                      width="750" height="350" loading="lazy"
                      alt="Quisque egestas iaculis felis eget placerat ut pulvinar mi." class="img-cover">
                  </a>
                </figure>

                <div class="content">

                  <h3 class="h3 title">
                    <a href="#">
                      How to Automatically Delete Passcode Texts on Android and iOS
                    </a>
                  </h3>

                  <p class="text">
                    Here’s one simple way to reduce your security risk while logging in.
                  </p>

                  <div class="meta">

                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-03-07">20 Aug, 2023</time>
                    </div>

                    <data value="15">Cyber-news</data>
                    <!-- <button class="comment" aria-label="Comment">
                      <ion-icon name="chatbubble-outline"></ion-icon>

                      
                    </button>

                    <button class="share" aria-label="Share">
                      <ion-icon name="share-social-outline"></ion-icon>
                    </button> -->

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="banner">
                  <a href="#">
                    <img src="https://media.wired.com/photos/63eaa0cf1b87b32b35988c1e/3:2/w_960,c_limit/Best-VPNs-Guide-2023-Gear-GettyImages-1223865512.jpg" width="750" height="350" loading="lazy"
                      alt="Fusce sem ligula, imperdiet sed nisi sit amet, euismod posuere." class="img-cover">
                  </a>
                </figure>

                <div class="content">

                  <h3 class="h3 title">
                    <a href="#">
                      The Best VPNs to Protect Yourself Online
                    </a>
                  </h3>

                  <p class="text">
                    It won’t solve all of your privacy problems, but a virtual private network can make you a less
                    tempting target for hackers.
                  </p>

                  <div class="meta">

                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-03-07">20 Aug, 2023</time>
                    </div>

                    <data value="15">Cyber-news</data>
                    <!-- <button class="comment" aria-label="Comment">
                      <ion-icon name="chatbubble-outline"></ion-icon>

                      
                    </button>

                    <button class="share" aria-label="Share">
                      <ion-icon name="share-social-outline"></ion-icon>
                    </button> -->

                  </div>

                </div>

              </div>
            </li>

            <li>
              <div class="blog-card">

                <figure class="banner">
                  <a href="#">
                    <img src="https://media.wired.com/photos/64d6c1397bdca8cda5f9f3e9/3:2/w_960,c_limit/Security-Roundup-Keyboard-Tracking-1301125224.jpg" width="750" height="350" loading="lazy"
                      alt="Donec feugiat mollis nisi in dignissim. Morbi sollicitudin quis." class="img-cover">
                  </a>
                </figure>

                <div class="content">

                  <h3 class="h3 title">
                    <a href="#">
                      A New Attack Reveals Everything You Type With 95 Percent Accuracy
                    </a>
                  </h3>

                  <p class="text">
                    A pair of major data breaches rock the UK, North Korea hacks a Russian missile maker, and
                    Microsoft’s Chinese Outlook breach sparks new problems.
                  </p>

                  <div class="meta">

                    <div class="publish-date">
                      <ion-icon name="time-outline"></ion-icon>

                      <time datetime="2022-03-07">20 Aug, 2023</time>
                    </div>

                    <data value="15">Cyber-news</data>
                    <!-- <button class="comment" aria-label="Comment">
                      <ion-icon name="chatbubble-outline"></ion-icon>

                      
                    </button>

                    <button class="share" aria-label="Share">
                      <ion-icon name="share-social-outline"></ion-icon>
                    </button> -->

                  </div>

                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">CyberHub</a>

          <p class="text">
            Get seemless experience with CyberHub use it anytime & anywhere...
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Our links</p>
          </li>

          <li>
            <a href="#" class="footer-link">Home</a>
          </li>

          <li>
            <a href="#" class="footer-link">About Us</a>
          </li>

          <li>
            <a href="#" class="footer-link">Services</a>
          </li>

          <li>
            <a href="#" class="footer-link">Team</a>
          </li>

          

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Our Services</p>
          </li>

          <li>
            <a href="#" class="footer-link">CyberHub</a>
          </li>

          <li>
            <a href="#" class="footer-link">CyberHub</a>
          </li>

          <li>
            <a href="#" class="footer-link">CyberHub</a>
          </li>

          <li>
            <a href="#" class="footer-link">CyberHub</a>
          </li>

          <li>
            <a href="#" class="footer-link">CyberHub</a>
          </li>

        </ul>


      </div>
    </div>

    <div class="footer-bottom">
      <p class="copyright">
        &copy; 2023 <a href="#" class="copyright-link">S.V group's</a>. All Right Reserved
      </p>
    </div>

  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top  active" aria-label="Go To Top" data-go-top>
    <ion-icon name="arrow-up-outline"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>