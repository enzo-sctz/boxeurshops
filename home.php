<?php 
    session_start();
    // if(!isset($_SESSION['user']))
    //     header('Location:logout.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personal webiste</title>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <script src="js/scripts.js"></script>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="inner-width">
    <div class="logo"> </div>
      <button class="menu-toggler">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-menu">
        <a href="#home">Home</a>
        <a href="#info">Info</a>
        <a href="#services">Services</a>
        <a href="#education">Education</a>
        <a href="#works">Works</a>
        <a href="#contact">Contact</a>
      </div>
    </div>
  </nav>

  <!-- Home -->
  <section id="home">
    <div class="inner-width">
      <div class="content">
        <h1></h1>
        <div class="sm">
          <a href="#" class="fab fa-facebook-f"></a>
          <a href="#" class="fab fa-twitter"></a>
          <a href="https://www.instagram.com/boxeurshops/" class="fab fa-instagram"></a>
          <a href="#" class="fab fa-linkedin-in"></a>
          <a href="https://www.youtube.com/channel/UCLlNLdHQ625Gyliy7GoxdOw?view_as=subscriber" class="fab fa-youtube"></a>
        </div>
        <div class="buttons">
          <a href="profil.php">Profil</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Info -->
  <section id="info">
    <div class="inner-width">
      <h1 class="section-title">info</h1>
      <div class="about-content">
        <img src="images/blg.jpg" alt="" class="about-pic">
        <div class="about-text">
          <h2>Boxeurshops</h2>
          <h3>
            <span>Sport</span>
            <span>Boxe</span>
            <span>Magazin</span>
          </h3>
          <p>
            Si tu es sur ce site cela veut sûrement dire que tu es un passionné de boxe ou 
            tu recherches probablemnt des formations, des conseils que je donne en video,
            des équipements de boxe ou bien du divertissement car sur ce site il y a 
            aussi un blog ou vous pouvez faire des rencontres et tout les vendredi je vous 
            raconte quelques histoires à propos de légende.
          </p>
        </div>
      </div>

      <div class="skills">
        <div class="skill">
          <div class="skill-info">
            <span>HTML</span>
            <span>90%</span>
          </div>
          <div class="skill-bar html"></div>
        </div>

        <div class="skill">
          <div class="skill-info">
            <span>CSS</span>
            <span>80%</span>
          </div>
          <div class="skill-bar css"></div>
        </div>

        <div class="skill">
          <div class="skill-info">
            <span>Javascript</span>
            <span>70%</span>
          </div>
          <div class="skill-bar js"></div>
        </div>

        <div class="skill">
          <div class="skill-info">
            <span>PHP</span>
            <span>60%</span>
          </div>
          <div class="skill-bar php"></div>
        </div>

        <div class="skill">
          <div class="skill-info">
            <span>MySQL</span>
            <span>90%</span>
          </div>
          <div class="skill-bar mysql"></div>
        </div>

        <div class="skill">
          <div class="skill-info">
            <span>C#</span>
            <span>80%</span>
          </div>
          <div class="skill-bar cs"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section id="services" class="dark">
    <div class="inner-width">
      <h1 class="section-title">Services</h1>
      <div class="services">
        <div class="service">
          <i class="icon fas fa-paint-brush"></i>
          <h4>Design</h4>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>

        <div class="service">
          <i class="icon fas fa-pager"></i>
          <h4>Build Websites</h4>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>

        <div class="service">
          <i class="icon fas fa-database"></i>
          <h4>Manage Databases</h4>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>

        <div class="service">
          <i class="icon fab fa-android"></i>
          <h4>Android Apps</h4>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>

        <div class="service">
          <i class="icon fas fa-credit-card"></i>
          <h4>Ui Design</h4>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>

        <div class="service">
          <i class="icon fas fa-keyboard"></i>
          <h4>Edit Texts</h4>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Education -->
  <section id="education">
    <div class="inner-width">
      <h1 class="section-title">Education & Experiences</h1>
      <div class="time-line">
        <div class="block">
          <h4>2018 - 2019</h4>
          <h3>Software engineering</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At expedita maiores ullam voluptatum a nulla aperiam enim eveniet adipisci ipsum.</p>
        </div>

        <div class="block">
          <h4>2018 - 2019</h4>
          <h3>Software engineering</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At expedita maiores ullam voluptatum a nulla aperiam enim eveniet adipisci ipsum.</p>
        </div>

        <div class="block">
          <h4>2018 - 2019</h4>
          <h3>Software engineering</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At expedita maiores ullam voluptatum a nulla aperiam enim eveniet adipisci ipsum.</p>
        </div>

        <div class="block">
          <h4>2018 - 2019</h4>
          <h3>Software engineering</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At expedita maiores ullam voluptatum a nulla aperiam enim eveniet adipisci ipsum.</p>
        </div>

        <div class="block">
          <h4>2018 - 2019</h4>
          <h3>Software engineering</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At expedita maiores ullam voluptatum a nulla aperiam enim eveniet adipisci ipsum.</p>
        </div>

        <div class="block">
          <h4>2018 - 2019</h4>
          <h3>Software engineering</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At expedita maiores ullam voluptatum a nulla aperiam enim eveniet adipisci ipsum.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Works -->
  <section id="works" class="dark">
    <div class="inner-width">
      <h1 class="section-title">Works</h1>
      <div class="works">
        <a href="images/works/1.jpg" class="work">
          <img src="images/works/1.jpg" alt="">
          <div class="info">
            <h3>Work Title</h3>
            <div class="cat">Music, Headset</div>
          </div>
        </a>

        <a href="images/works/2.jpg" class="work">
          <img src="images/works/2.jpg" alt="">
          <div class="info">
            <h3>Work Title</h3>
            <div class="cat">Music, Headset</div>
          </div>
        </a>

        <a href="images/works/3.jpg" class="work">
          <img src="images/works/3.jpg" alt="">
          <div class="info">
            <h3>Work Title</h3>
            <div class="cat">Music, Headset</div>
          </div>
        </a>

        <a href="images/works/4.jpg" class="work">
          <img src="images/works/4.jpg" alt="">
          <div class="info">
            <h3>Work Title</h3>
            <div class="cat">Music, Headset</div>
          </div>
        </a>

        <a href="images/works/5.jpg" class="work">
          <img src="images/works/5.jpg" alt="">
          <div class="info">
            <h3>Work Title</h3>
            <div class="cat">Music, Headset</div>
          </div>
        </a>

        <a href="images/works/6.jpg" class="work">
          <img src="images/works/6.jpg" alt="">
          <div class="info">
            <h3>Work Title</h3>
            <div class="cat">Music, Headset</div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact">
    <div class="inner-width">
      <h1 class="section-title">Get in touch</h1>
      <div class="contact-info">
        <div class="item">
          <i class="fas fa-mobile-alt"></i>
          0620315114
        </div>

        <div class="item">
          <i class="fas fa-envelope"></i>
          cyberscte@gmail.com
        </div>

        <div class="item">
          <i class="fas fa-map-marker-alt"></i>
          Paris
        </div>
      </div>

      <form action="#" class="contact-form">
        <input type="text" class="nameZone" placeholder="Your Full Name">
        <input type="email" class="emailZone" placeholder="Your Email">
        <input type="text" class="subjectZone" placeholder="Subject">
        <textarea class="messageZone" placeholder="Message"></textarea>
        <input type="submit" value="Envoyez" class="btn">
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="inner-width">
      <div class="copyright">
        &copy; 2020 | Creer par <a href="#">Enzo</a>
      </div>
      <div class="sm">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/boxeurshops/" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin-in"></a>
        <a href="https://www.youtube.com/channel/UCLlNLdHQ625Gyliy7GoxdOw?view_as=subscriber" class="fab fa-youtube"></a>
      </div>
    </div>
  </footer>

  <!-- Go Top BTN -->
  <button class="goTop fas fa-arrow-up"></button>

</body>
</html>