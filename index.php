<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta content="author: terry-tan">
    <title>Terry Tan - Portfolio</title>
		<link rel="icon" type="image/png" href="./images/cat.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="js/slick-1.6.0/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="js/slick-1.6.0/slick/slick-theme.css"/>
  </head>

  <body>
    <section id="top"></section>
    <header>
      <nav>
        <ul>
          <li><a href="#top" onclick="smoothScroll('top');">Terry Tan</a></li>
          <li><a href="#top" onclick="smoothScroll('top');" >Home</a></li>
          <li><a href="#resume" onclick="smoothScroll('resume');">Resum&eacute;</a></li>
          <li><a href="#portfolio" onclick="smoothScroll('portfolio');">Portfolio</a></li>
          <li><a href="#contact" onclick="smoothScroll('contact');">Contact</a></li>
        </ul>
      </nav>
    </header>
    <img  id="hello-img" src="./images/Hello.png" />
    <section id="home">
      <p>
        My name is Terry Tan.<br />
        Welcome to my personal website!<br />
        I like cats, coding, proofs, and pretty things.<br />
        I'm currently an undergraduate at the University of Pittsburgh.<br />
        I started at Pitt as a pre-med student, finishing all the requisite courses.<br />
        After some hard reflection, I decided it wasn't what I wanted to do!<br />
        <br />
        I've always felt a deep connection with computers, mathematics, and art, so I decided
        to become a Mathematics and Computer Science major with a minor in Studio Arts.<br />
        I hope to incorporate either my mathematical or artistic background into
        my experiences and projects.
      </p>
    </section>
    <div id="home-bottom"></div>
    <img id="cat-img" src="./images/cat.png" />
    <img  class="header-img" src="./images/Resume.png" />
    <section id="resume">
        <div class="box">
          <div class="resume-box">
            <img class="icon" src="./images/mortarboard.png" /><br />
            <h1 class="title">Education</h1>
            <p>
              University of Pittsburgh<br />
              Computer Science and Mathematics<br />
              Studio Arts and Chemistry<br />
              GPA: 3.836
            </p>
          </div>
          <div class="resume-box">
            <img class="icon" src="./images/coding.png" /><br />
            <h1 class="title">Languages</h1>
            <p>
              Java, C, CSS, HTML, MATLAB, LaTeX
            </p>
          </div>
          <div class="resume-box">
            <img class="icon" src="./images/github-logo.png" /><br />
            <h1 class="title">Personal Projects</h1>
            <p>
              Project Euler Solutions<br />
              Error Analysis on Power Method<br />
              Personal Website<br />
            </p>
          </div>
          <div class="resume-box">
            <img class="icon" src="./images/github-logo.png" /><br />
            <h1 class="title">Class Projects</h1>
            <p>
              File System<br />
              Password Checker<br />
              LZW Compression<br />
              RSA Signature<br />
            </p>
          </div>
          <div class="resume-box">
            <img class="icon" src="./images/light-bulb.png" /><br />
            <h1 class="title">Ongoing Projects</h1>
            <p>
              Laboon Chess - Class<br />
              Secure File Sharing System - Class<br />
              Zombie Population Modeling - Personal<br />
              Steganography with Images - Personal<br />
            </p>
          </div>
          <div class="resume-box">
            <img class="icon" src="./images/pencil.png" /><br />
            <h1 class="title">Employment</h1>
            <p>
              Illustrator at The Pitt News
            </p>
          </div>
          <div class="resume-box">
            <img class="icon" src="./images/computer.png" /><br />
            <h1 class="title">Extracurriculars</h1>
            <p>
              Business Manager of Math Club<br />
              LoL at Pitt<br />
              Computer Science Club<br />
            </p>
          </div>
        </div>
    </section>

    <section id="portfolio">
      <h1>PORTFOLIO</h1>
      <hr class="horizontal-line1">
      <h2>Miscellaneous Projects</h2>
      <div class="one-time">
        <div><img src="./images/art-2.png" alt="" class="portfolio-img"></div>
        <div><img src="./images/art-3.png" alt="" class="portfolio-img"></div>
        <div><img src="./images/art-4.png" alt="" class="portfolio-img"></div>
        <div><img src="./images/tpn-1.png" alt="" class="portfolio-img"></div>
        <div><img src="./images/tpn-8.png" alt="" class="portfolio-img"></div>
        <div><img src="./images/tpn-10.png" alt="" class="portfolio-img"></div>
      </div>
      <hr class="horizontal-line2">
      <h2>Project: Plastic Surgery - "Make Me Pretty"</h2>
      <div class="fade">
        <div><img src="./images/pretty-1.png" alt="" class="project-img"></div>
        <div><img src="./images/pretty-2.png" alt="" class="project-img"></div>
        <div><img src="./images/pretty-3.png" alt="" class="project-img"></div>
        <div><img src="./images/pretty-3-1.png" alt="" class="project-img"></div>
        <div><img src="./images/pretty-3-2.png" alt="" class="project-img"></div>
        <div><img src="./images/pretty-4.png" alt="" class="project-img"></div>
        <div><img src="./images/pretty-5.png" alt="" class="project-img"></div>
        <div><img src="./images/pretty-6.png" alt="" class="project-img"></div>
        <div><img src="./images/pretty-7.png" alt="" class="project-img"></div>
        <div><img src="./images/pretty-8.png" alt="" class="project-img"></div>
        <div><img src="./images/pretty-9.png" alt="" class="project-img"></div>
        <div><img src="./images/pretty-10.png" alt="" class="project-img"></div>
      </div>
    </section>

    <section id="contact">
      <h1>CONTACT</h1>
      <hr class="horizontal-line1">
      <div id="formDiv">
       <div id="notification">
       </div>
       <form id="contactForm" action="#" method="get">
         <fieldset class="texts">
           <div class="input-holder">
             <label for="firstname">Firstname: </label>
             <input type="text" id="firstname" maxlength="25" />
           </div>
           <div class="input-holder">
             <label for="lastname">Lastname: </label>
             <input type="text" id="lastname" maxlength="25"/>
           </div>
           <div class="input-holder">
             <label for="email">E-mail: </label>
             <input type="text" id="email">
           </div>
         </fieldset>
         <fieldset class="largetext">
           What do you want to know?:<br />
           <textarea rows="3" cols="40" id="questiontext"></textarea>
         </fieldset>
         <input type="button" value="reset" onclick="resetForm()" />
         <input type="submit" name="submit" value="submit" onclick="validation()" />
       </form>
     </div>
    </section>

    <footer>
      <p>
        Credits for the icons: Pixel Buddha, Roundicons, Freepik, Prosymbols, and Dave Gandy @ flaticon.com<br />
        Credits for the image carousel: <a href="http://kenwheeler.github.io/slick/">Ken Wheeler </a>
      </p>
    </footer>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/slick-1.6.0/slick/slick.js"></script>
    <script type="text/javascript" src="js/js_stuff.js"></script>
  </body>
</html>