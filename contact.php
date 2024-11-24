<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTC Hackathon</title>
    <link rel="stylesheet" href="css/test2.css" />
    <link rel="icon" href="mtcode\favicon.ico" type="image/x-icon">


    </style>
    <script defer src="script/scroll.js"></script>
    <style>
      /*contact page*/
/* Adjust the vertical position of the section */


.map{
  transform: translateY(2000px);
  margin-left: 250px;
}
.mtlogo{
  height: 168px;
  width: 567;
  transform: translateY(800px);
  margin-left: 170px;
}
.isgilogo{
  width: 209px;
  height: 148px;
  transform: translateY(630px);
  margin-left: 1100px;

}
.addresse{
  transform: translateY(356px);
  margin-left: 900px;
}
.mtmail{
  transform: translateY(330px);
  margin-left: 340px;
}
.pn1{
  transform: translateY(480px);
  margin-left: 340px;
}
.contact{height: 31px;
width: 31px;
background-color: white;
margin-left: 300px;
transform: translateY(500px);
border-radius: 0.5rem;
margin-top: -100px;

}
.contact2{height: 31px;
width: 31px;
background-color: white;
margin-left: 300px;
margin-top: -10px;
transform: translateY(500px);
border-radius: 0.5rem;}

.logomtc{
  height: 200px;
  width: auto;
  margin-left: 1100px;
  transform: translateY(200px);
}
.title{
  margin-top: -250px;
  margin-left: 250px;
  font-size: 40px;
  font-weight: bold;
}
.title2{
  margin-top: -250px;
  margin-left: 250px;
  font-size: 40px;
  font-weight: bold;
}
.form__group{
  margin-left: 150px;
  transform: translateY(-50px);
}
.hidden {
  transform: translateY(500px); 
}

/* Adjust the vertical position of the title */
.title.hidden {
  transform: translateY(50px); 
}


.form__group.hidden {
  transform: translateY(50px);
}
.form__group {
  position: relative;
  padding: 15px 0 0;
  margin-top: 10px;
  width: 50%;
}

.form__field {
  font-family: inherit;
  width: 100%;
  border: 0;
  border-bottom: 2px solid #9b9b9b;
  outline: 0;
  font-size: 1.3rem;
  color: #fff;
  padding: 7px 0;
  background: transparent;
  transition: border-color 0.2s;
}
.form__field::placeholder {
  color: transparent;
}
.form__field:placeholder-shown ~ .form__label {
  font-size: 1.3rem;
  cursor: text;
  top: 20px;
}

.form__label {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 1rem;
  color: #9b9b9b;
}

.form__field:focus {
  padding-bottom: 6px;
  font-weight: 700;
  border-width: 3px;
  border-image: linear-gradient(to right, #991d7a, #eb52bf);
  border-image-slice: 1;
}
.form__field:focus ~ .form__label {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 1rem;
  color: #991d7a;
  font-weight: 700;
}
.btnform{
  width: 150px;
  height: 50px;
  margin-left: 155px;
}

/* reset input */
.form__field:required, .form__field:invalid {
  box-shadow: none;
}







/*Responsive*/
@media (max-width: 320px) {
  .title{
    margin-left: 180px;
  }
  .form__group{
    position: relative;
    margin-left: 85px;
    width: 20%;
    top: -50%;
  }
  .btnform{
    position: relative;
    margin-left: 70px;
  }
  .navbtn{
    display: none;
  }
  .logomtc{
    position: relative;
    left: 10%;
  }
  .title2{
    position: relative;
    margin-left: 170px;
    font-size: 20px;
  }
  .contact,.contact2,.mtmail,.pn1{
    position: relative;
    margin-left: 270px;
  }
  .pn1{
    font-size: 12px;
  }
  .mtlogo{
    display: none;
  }
  .contact{
    margin-left: 230px;
  }
  .contact2{
    margin-left: 230px
  }
  .isgilogo{
    display: none;
  }
  .map{
    position: relative;
    margin-left: 160px;
  }
}
/* Medium phones */
@media only screen and (min-width: 321px) and (max-width: 376px) {
  .title{
    position: relative;
    left: -12.5%;
    margin-top: -300px;
    font-size: 20px;
  }
  .form__group{
    position: relative;
    left: -9%;
    width: 20%;
    top: -50%;
  }
  .btnform{
    position: relative;
    transform: translateX(-170%);
  }
  .navbtn{
    display: none;
  }
  .logomtc{
    position: relative;
    left: 10%;
  }
  .title2{
    position: relative;
    left: -12%;
    font-size: 20px;
  }
  .contact,.contact2,.mtmail,.pn1{
    position: relative;
    left: -19%;
  }
  .pn1{
    font-size: 12px;
  }
  .mtlogo{
    display: none;
  }
  .isgilogo{
    display: none;
  }
  .map{
    position: relative;
    left: -70%;
  }

}
@media only screen and (min-width: 377px) and (max-width: 426px) {

  .title{
    position: relative;
    left: -11%;
    margin-top: -300px;
    font-size: 20px;
  }
  .form__group{
    position: relative;
    left: -7%;
    width: 20%;
    top: -50%;
  }
  .btnform{
    position: relative;
    transform: translateX(-160%);
  }
  .navbtn{
    display: none;
  }
  .logomtc{
    position: relative;
    left: 10%;
  }
  .title2{
    position: relative;
    left: -10.3%;
    font-size: 20px;
  }
  .contact,.contact2,.mtmail,.pn1{
    position: relative;
    left: -17%;
  }
  .pn1{
    font-size: 12px;
  }
  .mtlogo{
    display: none;
  }
  .isgilogo{
    display: none;
  }
  .map{
    position: relative;
    left: -62.7%;
  }

  }

  


/**/


@media only screen and (max-width: 600px) {
  .title{
    position: relative;
    left: -8%;
    margin-top: -300px;
    font-size: 20px;
  }
  .form__group{
    position: relative;
    left: -5%;
    width: 20%;
    top: -50%;
  }
  .btnform{
    position: relative;
    transform: translateX(-125%);
  }
  .navbtn{
    display: none;
  }
  .logomtc{
    position: relative;
    left: 10%;
  }
  .title2{
    position: relative;
    left: -7%;
    font-size: 20px;
  }
  .contact{
    position: relative;
    left: -15%;
    transform: translateY(1720%);
  }
  .contact2,.mtmail,.pn1{
    position: relative;
    left: -15%;
    top: 130%;
  }
  .pn1{
    font-size: 12px;
  }
  .mtlogo{
    display: none;
  }
  .isgilogo{
    display: none;
  }
  .map{
    position: relative;
    left: -50%;
  }
}


@media only screen and (min-width: 601px) and (max-width: 768px) {
  .title{
    position: relative;
    left: 0.5%;
    margin-top: -300px;
    font-size: 20px;
  }
  .form__group{
    position: relative;
    left: 5%;
    width: 20%;
    top: -50%;
  }
  .btnform{
    position: relative;
    transform: translateX(-125%);
  }
  .navbtn{
    display: none;
  }
  .logomtc{
    position: relative;
    left: 10%;
  }
  .title2{
    position: relative;
    left: 1%;
    font-size: 20px;
  }
  .contact{
    position: relative;
    left: -7%;
    transform: translateY(1720%);
  }
  .contact2,.mtmail,.pn1{
    position: relative;
    left: -7%;
    top: 130%;
  }
  .pn1{
    font-size: 12px;
  }
  .mtlogo{
    display: none;
  }
  .isgilogo{
    display: none;
  }
  .map{
    position: relative;
    left: -37%;
  }
}



/* Medium devices (landscape tablets, 768px and up) */

@media only screen and (min-width: 769px) and (max-width: 809px){

  .title{
    position: relative;
    left: 1%;
    margin-top: -300px;
    font-size: 20px;
  }
  .form__group{
    position: relative;
    left: 5%;
    width: 20%;
    top: -50%;
  }
  .btnform{
    position: relative;
    transform: translateX(-400%);
  }
  .navbtn{
    display: none;
  }
  .logomtc{
    position: relative;
    left: 10%;
  }
  .title2{
    position: relative;
    left: 1%;
    font-size: 20px;
  }
  .contact{
    position: relative;
    left: -7%;
    transform: translateY(1720%);
  }
  .contact2,.mtmail,.pn1{
    position: relative;
    left: -7%;
    top: 130%;
  }
  .pn1{
    font-size: 12px;
  }
  .mtlogo{
    display: none;
  }
  .isgilogo{
    display: none;
  }
  .map{
    position: relative;
    left: -32%;
  }
}
@media only screen and (min-width: 810px) and (max-width: 992px) {
  .title{
    position: relative;
    left: 5%;
    margin-top: -300px;
    font-size: 20px;
  }
  .form__group{
    position: relative;
    left: 9%;
    width: 20%;
    top: -50%;
  }
  .btnform{
    position: relative;
    transform: translateX(-550%);
  }
  .navbtn{
    display: none;
  }
  .logomtc{
    position: relative;
    left: 10%;
  }
  .title2{
    position: relative;
    left: 6%;
    font-size: 20px;
  }
  .contact{
    position: relative;
    left: -2%;
    transform: translateY(1650%);
  }
  .contact2,.mtmail,.pn1{
    position: relative;
    left: -2%;
    top: 130%;
  }
  .pn1{
    font-size: 12px;
  }
  .mtlogo{
    display: none;
  }
  .isgilogo{
    display: none;
  }
  .map{
    position: relative;
    left: -28%;
  }
  .addresse{display:none;}
}

/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (min-width: 993px) and (max-width: 1200px){

  .title{
    position: relative;
    left: 14%;
    margin-top: -300px;
    font-size: 20px;
  }
  .form__group{
    position: relative;
    left: 18%;
    width: 20%;
    top: -50%;
  }
  .btnform{
    position: relative;
    transform: translateX(145%);
  }
  .navbtn{
    display: none;
  }
  .logomtc{
    position: relative;
    left: 10%;
  }
  .title2{
    position: relative;
    left: 15%;
    font-size: 20px;
  }
  .contact{
    position: relative;
    left: 6%;
    transform: translateY(1650%);
  }
  .contact2,.mtmail,.pn1{
    position: relative;
    left: 6%;
    top: 150%;
  }
  .pn1{
    font-size: 12px;
  }
  .mtlogo{
    display: none;
  }
  .isgilogo{
    display: none;
  }
  .map{
    position: relative;
    left: -23%;
  }
  .addresse{display:none;}
}

@media only screen and (min-width: 1201px) and (max-width: 1500px){
  .logomtc{display:none;}
  .title2{margin-left: 324px;}
  .addresse{margin-left: 792px;}
  .mtlogo{margin-left: 86px;}
  .isgilogo{margin-left: 895px;}
  .map{position: relative;
  left: -10%;}
}





@media only screen and (min-width: 2560px) and (max-width: 3840px) {
  .herot1{
    position: absolute;
    left: 50%;
    top: 25%;
    font-size: 30px;
    width: 1000px;
  }
  .herot2{
    position: absolute;
    left: 50%;
    top: 57%;
    
  }
  .fv2{
    position: relative;
    font-size: 50px;
    left: 50%;
    margin-top: 200px;
  }
  .fv{
    position: relative;
    margin-top: 100px;
    left: 50%;
    font-size: 20px;
  }
  .button-85{
    position: relative;
    left: 50%;
  }
  .pc-screen{
    position: absolute;
    top: 2.5%;
    left: 10%;
    width: 100%;
    height: 100%;
    z-index: 0;
    pointer-events: none;
  }
  .container{
    position: relative;
    top: 6%;
  }
  .ticket{
    position: relative;
    left: 10%;
    top: -112%;
  }
  .details-title{
    position: relative;
    left: 20%;
    top: -190%;

  }
  .details-text{
    position: relative;
    left: 20%;
    top: -180%;
    font-size: 30px;
  }
  .sponsors-title{
    position: relative;
    top: -100%;
    font-size: 50px;
  }
  #tilt{
    position: relative;
    top: -110%;
  }
  .mission-title{
    position: relative;
    top: -150%;
  }
  .technologies-title{
    position: relative;
    left: 20%;
    font-size: 18px;
    top: -150%;
  }
  .honeycomb{
    position: relative;
    left: -1.2%;
    top: -190%;
  }
  .techparagraph{
    display: none;
  }
  .navbtn{display: none;}
  .historyp{
    position: relative;
    margin: 10px;
    left: -0.2%;
  }
  #imtc{display: none;}
}
</style>
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
        xmlns="https://www.w3.org/2000/svg"
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











<section class="hidden">
    <h1 class="title hidden">Get In Touch</h1> <img class="logomtc" src="mtcode/Logo 4k.png" alt=""><img>
    <form action="https://formspree.io/f/mrgnygpe" method="POST">
    <div class="form__group field">
  <input type="input" class="form__field" placeholder="Name" name="name" id='name' required />
  <label for="name" class="form__label">Your Name</label>
  
</div>
<div class="form__group field">
  <input type="input" class="form__field" placeholder="Name" name="name" id='name' required />
  <label for="name" class="form__label">Email Address</label>
  
</div>
<div class="form__group field">
  <input type="input" class="form__field" placeholder="Name" name="name" id='name' required />
  <label for="name" class="form__label">Subject</label>
  
</div>
<div class="form__group field">
  <input type="input" class="form__field" placeholder="Name" name="name" id='name' required />
  <label for="name" class="form__label">Your Message</label>
  
</div>
<button type="submit" class="button-85 btnform">Send</button>
    </form>
    
    
    <div><h1 class="title2 hidden">Contact Us</h1></div>
    <img class="contact" src="mtcode/mail.png" alt=""/>
    <img class="contact2" src="mtcode/phone.png" alt=""/>
    <p class="pn1">+216 52011172 / +216 95304719</p>
    <p class="addresse">Sfax, Route tunis km11, Hay ons , ISGIS </p>
    <p class="mtmail">mtclub.isgis@gmail.com</p>
    <img class="mtlogo" src="mtcode/logo mtc white 4k.png" alt=""/>
    <img class="isgilogo" src="mtcode/isgilogo.png" alt=""/>

    

    
</section>
<div class="map" style="overflow:hidden;max-width:100%;width:1000px;height:500px;"><div id="display-google-map" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=ISGI+Sfax,+Sfax,+Tunisia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="google-map-code-enabler" rel="nofollow" href="https://www.bootstrapskins.com/themes" id="enable-map-info">premium bootstrap themes</a><style>#display-google-map img{max-height:none;max-width:none!important;background:none!important;}</style></div>















<footer>
<div class="fauta rectangle-78 last-component">
<h3 class="footertxt">Stay Up To Date With Our News And Notifications<h3>
  <div class="socials">
    <div class="socials-img-container"><a href="https://www.instagram.com/mtclub.isgis/"><img src="mtcode/instagrami.png" class="ig"/></a></div>
    <div class="socials-img-container"><a href="https://www.linkedin.com/company/mtclub-isgis/"><img src="mtcode/linkedini.png" class="in"/></a></div>
    <div class="socials-img-container"><a href="https://www.facebook.com/mtclub.isgis"><img src="mtcode/facebooki.png" class="fb"/></a></div>
  </div>    
<h5 class="copyright">Copyright © Microsoft Tech Club ISGIS | All rights reserved</h5>
</div>
</footer>

<script src="script/index.js"></script>
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
</body>
</html>