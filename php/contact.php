<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Anna Sørensen Portfolio</title>
    <!-- add jQuery .-->
    <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
      crossorigin="anonymous"
    ></script>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon" />
    <!--adding fonts using CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!--links to stylesheets -->
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/contact.css" />
  </head>
  <body>
    <!-- header-->
    <header class="header-main">
      <div class="header-main-logo">
        <img src="img/logo.png" alt="logo" />
        <nav class="header-main-nav">
          <ul>
            <li><a href="index.html">Home</a></li>
            <!-- "#" er bare placeholder indtil vi finder et link-->
            <li><a href="aboutMe.html">About Me</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
          </ul>
        </nav>
      </div>
      <div class="header-main-some">
        <a href="https://www.facebook.com/anna.kaersgaard"
          ><div class="header-main-some-fb"></div
        ></a>
        <a href="https://www.instagram.com/annaksoerensen/"
          ><div class="header-main-some-ig"></div
        ></a>
      </div>
    </header>
    <!--begin here-->
    <main>
      <div class="contact-container">
        <h1>Contact Me</h1>
        <p>
          Feel free to contact me and I will get back to you as soon as
          possible.
        </p>
        <!-- PHP error message-->
        <?php
            $message = "";
            if(isset($_GET['error'])){
                $message = "Please fill in the blanks";
                echo '<div class="alertDanger">'.$message.'</div>';
            }
            if(isset($_GET['mailsend'])){
                $message = "Please fill in the blanks";
                echo '<div class="alertMailSend">'.$message.'</div>';
            }
        ?>
        <form class="contactform" action="php/mail.php" method="post">
          <input type="text" name="name" placeholder="Full name" />
          <input type="text" name="email" placeholder="Your email" />
          <input type="text" name="subject" placeholder="Subject" />
          <textarea
            name="message"
            placeholder="Message"
            cols="50"
            rows="5"
          ></textarea>
          <button type="submit" name="submit">SEND MAIL</button>
        </form>
      </div>
    </main>

    <!-- footer of the website-->
    <footer class="footer-main">
      <div class="wrapper-main footer-main-flex">
        <div class="footer-sjip">
          <img src="img/footer/footer1.png" alt="footer" />
          <p>1st place at the Danish Championships <br />2018</p>
        </div>
        <div class="footer-sjip">
          <img src="img/footer/footer2.png" alt="footer" />
          <p>3rd place at European Championships <br />2019</p>
        </div>
        <div class="footer-sjip">
          <img src="img/footer/footer3.png" alt="footer" />
          <p>Waiting to compete at EC <br />2019</p>
        </div>
        <div class="footer-sjip">
          <img src="img/footer/footer4.png" alt="footer" />
          <p>Floor Check before EC <br />2019</p>
        </div>
        <div class="footer-sjip">
          <img src="img/footer/footer5.png" alt="footer" />
          <p>3rd best DDSF in the World <br />2018</p>
        </div>

        <a class="footer-link" href="contact.html">Get in touch with me</a>

        <div class="footer-sitemap">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="aboutMe.html">About me</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
          </ul>
          <ul>
            <li>
              <p>
                <br />Do not hesitate to get in touch with me if you have any
                questions
              </p>
            </li>
          </ul>
          <ul>
            <li><p>Contact information:</p></li>
            <li><p>Tlf: 50494500</p></li>
            <li><p>anna.kaersgaard@gmail.com</p></li>
            <!-- mangler-->
            <li><p>LinkdIn: Anna Kærsgaard Sørensen</p></li>
          </ul>
        </div>
      </div>
    </footer>
  </body>
</html>
