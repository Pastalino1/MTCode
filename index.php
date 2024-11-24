<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTC Hackathon</title>
    <link rel="stylesheet" href="css/test2.css"/>
<link rel="icon" href="mtcode\favicon.ico" type="image/x-icon">


    <style>


      a,
      button,
      input,
      select,
      h1,
      h2,
      h3,
      h4,
      h5,
      * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        border: none;
        text-decoration: none;
        appearance: none;
        background: none;

        -webkit-font-smoothing: antialiased;
      }
    </style>
    <script defer src="script/scroll.js"></script>
</head>


<body>


<!--navbar-->




<section id="header">
    <a href="index"><img src="mtcode\mtcode2.png" class="logo" alt=""></a>
    <div>
        <ul id="navbar">
            <li><a href="index">About</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="signup"><button class="button-85 navbtn" role="button">Join Us</button></a></li>
        </ul>
        <div class="navbar-toggle">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </div>
</section>



<!--design-->


  
    <div class="website-landing-page">



    
      <svg
        class="ellipse-11"
        width="704"
        height="704"
        viewBox="0 0 704 704"
        fill="none"
        xmlns="https://www.w3.org/2000/svg"
      >
        <g filter="url(#filter0_f_101_3)">
          <path
            d="M704 352C704 546.404 546.404 704 352 704C157.596 704 0 546.404 0 352C0 157.596 157.596 0 352 0C546.404 0 704 157.596 704 352Z"
            fill="#09186D"
          />
        </g>
        <defs>
          <filter
            id="filter0_f_101_3"
            x="-493"
            y="-493"
            width="1690"
            height="1690"
            filterUnits="userSpaceOnUse"
            color-interpolation-filters="sRGB"
          >
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feBlend
              mode="normal"
              in="SourceGraphic"
              in2="BackgroundImageFix"
              result="shape"
            />
            <feGaussianBlur
              stdDeviation="246.5"
              result="effect1_foregroundBlur_101_3"
            />
          </filter>
        </defs>
      </svg>
      <svg
        class="ellipse-15"
        width="792"
        height="792"
        viewBox="0 0 792 792"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <g filter="url(#filter0_f_101_49)">
          <path
            d="M792 396C792 614.705 614.705 792 396 792C177.295 792 0 614.705 0 396C0 177.295 177.295 0 396 0C614.705 0 792 177.295 792 396Z"
            fill="#09186D"
          />
        </g>
        <defs>
          <filter
            id="filter0_f_101_49"
            x="-493"
            y="-493"
            width="1778"
            height="1778"
            filterUnits="userSpaceOnUse"
            color-interpolation-filters="sRGB"
          >
            <feFlood flood-opacity="0" result="BackgroundImageFix" />
            <feBlend
              mode="normal"
              in="SourceGraphic"
              in2="BackgroundImageFix"
              result="shape"
            />
            <feGaussianBlur
              stdDeviation="246.5"
              result="effect1_foregroundBlur_101_49"
            />
          </filter>
        </defs>
      </svg>
      
      
      <div class="ellipse-14"></div>
      <div class="ellipse-13"></div>
      <div>


<!--Hero-->

      
<section id="hero" class="mtchero hidden">
    <h4 class="herot1">MICROSOFT TECH CLUB ISGIS</h4>
    <h6 class="herot2">PRESENTS</h6>
    <h1 class="fv2"><strong>MTCode V1</strong></h1>
    <p class="fv">The First version of Mtcode Hackathon,<br>
       Organised By <strong>Microsoft tech club ISGIS</strong></p>
   <a href="signup"> <button class="button-85" role="button">Get Started</button></a>
</section>

<!--counter-->
<div class="main-example hidden">
<div class="countdown-container" data-timer="2030/09/05" id="main-example"></div>
</div>
<script type="text/template" id="main-example-template">
<div class="time <%= label %>">
  <span class="count curr top"><%= curr %></span>
  <span class="count next top"><%= next %></span>
  <span class="count next bottom"><%= next %></span>
  <span class="count curr bottom"><%= curr %></span>
  <span class="label"><%= label.length < 6 ? label : label.substr(0, 3)  %></span>
</div>
</script>



      </div>

      

      <div class="pc-screen hidden">
  <img src="mtcode\countdowns.png" alt="PC Screen" />
</div>

      <div class="container">
  <h1 id="headline">Countdown To MTC Hackathon</h1>
  <div id="countdown">
    <ul>
      <li><span id="days"></span>days</li>
      <li><span id="hours"></span>Hours</li>
      <li><span id="minutes"></span>Minutes</li>
      <li><span id="seconds"></span>Seconds</li>
    </ul>
  </div>
  <div id="content" class="emoji">
    <span>🥳</span>
    <span>🎉</span>
    <span>🎂</span>
  </div>
</div>

<!--About hack-->

<section class="about-hackathon hidden">

   <div class="piccontainer">
      <img class="ticket hidden" src="mtcode\2 FLYERS MTCODE.png"/>
      <div class="border"></div>
   </div>
   
   <div class="hackathon-details">
      <h1 class="details-title">What is MTCode V1 Hackathon?</h1>
      <p class="details-text">We are gearing up for a hackathon set for April 13. Participants<br>
         will engage in a 24-hour competition, using their creativity and<br>
         expertise to develop innovative solutions. Our aim is to create<br>
         technological interventions and tools that enhance accessibility,<br>
         inclusivity, and overall well-being... We believe this hackathon<br>
         will generate inventive ideas and significantly improve quality of<br>
         life. As we embark on this initiative , we seek your support and<br>
         sponsorship for lasting positive impact.<br></p>
   </div>

</section>

<!--Sponsors-->
<section class="mtc-sponsors hidden">
    
    <div class="sponsordiv">
      <h1 class="sponsors-title">Meet Our Sponsors</h1>
      <div class="center">
  <div class="carousel-wrapper">
    <!-- abstract radio buttons for slides -->
    <input id="slide1" type="radio" name="controls" checked="checked" />
    <input id="slide2" type="radio" name="controls" />
    <input id="slide3" type="radio" name="controls" />
    <input id="slide4" type="radio" name="controls" />
    <input id="slide5" type="radio" name="controls" />

    <!-- navigation dots -->
    <label for="slide1" class="nav-dot"></label>
    <label for="slide2" class="nav-dot"></label>
    <label for="slide3" class="nav-dot"></label>
    <label for="slide4" class="nav-dot"></label>
    <label for="slide5" class="nav-dot"></label>

    <!-- arrows -->
    <label for="slide1" class="left-arrow"> < </label>
    <label for="slide2" class="left-arrow"> < </label>
    <label for="slide3" class="left-arrow"> < </label>
    <label for="slide4" class="left-arrow"> < </label>
    <label for="slide5" class="left-arrow"> < </label>

    <label for="slide1" class="right-arrow"> > </label>
    <label for="slide2" class="right-arrow"> > </label>
    <label for="slide3" class="right-arrow"> > </label>
    <label for="slide4" class="right-arrow"> > </label>
    <label for="slide5" class="right-arrow"> > </label>

    <div class="carousel">
      <ul>
        <li>
          <img src="https://i.postimg.cc/MHt7PVnJ/interacti-1.jpg" />
        </li>
        <li>            
          <img src="https://i.postimg.cc/zDpT1wG9/ISGI.jpg" alt="">
        </li>
        <li>
          <img src="https://i.postimg.cc/fRb06Nhy/15e339d716fc5835d0905f75d4fe6df9-1.jpg" alt="">
        </li>
        <li>
          <img src="https://i.postimg.cc/gcTSPTvT/435063931-1622489495154461-8534154960762129637-n.jpg" />
        </li>
        <li>
          <img src="https://i.postimg.cc/YCF4jQt2/331735251-1807087716332573-7957920189572743482-n-1.jpg">
        </li>
        <li>
          <img src="https://i.postimg.cc/1tpZn5YY/422069316-1444201936195992-2825042469457472323-n-1.jpg" alt="">
        </li>
      </ul>
    </div>
  </div>
</div>

</section>


<!--Mission-->
<section class="mtc-mission hidden">
    <div class="missiondiv">
        <h1 class="mission-title">Our Mission In Microsoft Tech Club</h1>
        <h3 class="technologies-title">Microsoft Technologies</h3>
    </div>


<div class="technologies hidden">


<ul class="honeycomb" lang="es">
  <li class="honeycomb-cell">
    <img class="honeycomb-cell__image" src="mtcode/arti.jpg">
    <div class="honeycomb-cell__title">AI</div>
  </li>
  <li class="honeycomb-cell">
    <img class="honeycomb-cell__image" src="mtcode/powerbi.png">
    <div class="honeycomb-cell__title">Power BI</div>
  </li>
  <li class="honeycomb-cell">
    <img class="honeycomb-cell__image" src="mtcode/ioooot.png">
    <div class="honeycomb-cell__title">Internet of things</div>
  </li>
  <li class="honeycomb-cell">
    <img class="honeycomb-cell__image" src="mtcode/block.jpg">
    <div class="honeycomb-cell__title">Blockchain</div>
  </li>
  <li class="honeycomb-cell">
    <img class="honeycomb-cell__image" src="mtcode/azzure.png">
    <div class="honeycomb-cell__title">Azure</div>
  </li>
  <li class="honeycomb-cell">
    <img class="honeycomb-cell__image" src="mtcode/3dmodeling.png">
    <div class="honeycomb-cell__title">3D Modeling</small></div>
  </li>
  <li class="honeycomb-cell">
    <img class="honeycomb-cell__image" src="mtcode/cloudedge.jpg">
    <div class="honeycomb-cell__title">Edge/Cloud Computing</div>
  </li>
  <li class="honeycomb-cell honeycomb__placeholder"></li>
</ul>




</div>
<p class="techparagraph">Our goal in MTC ISGIS is to ignite technological innovation in our community, inspiring and educating students<br>
  through hands-on experiences and professional development. We aim to cultivate a culture of curiosity and creativity,<br>
  empowering individuals to drive positive change. Through practical opportunities , we equip the next generation with<br>
  the tools to thrive in the digital age.</p>
</section>


<!--History-->
<section class="hidden">

  <div class="hitsorydiv ">

     <h1 class="history-title">Our History</h1>
     <p class="historyp">We are the Microsoft Tech Club, founded on December 8, 2023, at ISGIS.<br>
        Our club is dedicated to students interested in Microsoft technologies<br>
        such as Power BI, Azure, Word, Excel, PowerPoint, cloud computing, IoT,<br>
        and blockchain. We provide assistance to students seeking the Microsoft<br>
        certifications in these technologies. We also offer various training sessions<br>
        covering topics such as web development, big data, machine learning, <br>
        cloud computing, content creation and video editing. We enable our members<br>
        to explore and excel in various aspects of the IT landscape.</p>
     <img id="imtc" src="mtcode/Logo 4k.png"/>
 </div>

</section>


<footer>
<div class="rectangle-78 last-component">
<h3 class="footertxt">Stay Up To Date With Our News And Notifications<h3>
  <div class="socials">
    <div class="socials-img-container"><a href="https://www.instagram.com/mtclub.isgis/"><img src="mtcode/instagrami.png" class="ig"/></a></div>
    <div class="socials-img-container"><a href="https://www.linkedin.com/company/mtclub-isgis/"><img src="mtcode/linkedini.png" class="in"/></a></div>
    <div class="socials-img-container"><a href="https://www.facebook.com/mtclub.isgis"><img src="mtcode/facebooki.png" class="fb"/></a></div>
  </div>    
<h5 class="copyright">Copyright © Microsoft Tech Club ISGIS | All rights reserved</h5>
</div>
</footer>

<!--JS-->
<script src="script/index.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const navbarToggle = document.querySelector(".navbar-toggle");
    const navbar = document.querySelector("#navbar");

    navbarToggle.addEventListener("click", function() {
        navbar.classList.toggle("active");
        navbarToggle.classList.toggle("active"); // Toggle the active class for the icon
    });
});
</script>

<script>


(function () {
  const second = 1000,
    minute = second * 60,
    hour = minute * 60,
    day = hour * 24;

  const countDownDate = new Date('April 13, 2024 00:00:00').getTime();

  const x = setInterval(function() {    
    const now = new Date().getTime();
    const distance = countDownDate - now;

    document.getElementById("days").innerText = Math.floor(distance / (day)),
    document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
    document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
    document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

    // Do something later when the date is reached
    if (distance < 0) {
      document.getElementById("headline").innerText = "The Event Is Over";
      document.getElementById("countdown").style.display = "none";
      document.getElementById("content").style.display = "block";
      clearInterval(x);
    }
  }, 1000); // Update every second
})();


</script>





</body>
</html>