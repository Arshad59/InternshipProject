<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRGBMD-contact</title>
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body><div class="bg">
<div class="logo" >
    <a href="{{route('home')}}"><img class="l1" src="logo3.png" alt="logo"></a>
</div>

<div class="topnav">
  <a href="{{route('contact')}}" class="active">CONTACT US</a>
  <div id="myLinks">
    <a class="a1" href="{{route('home')}}">HOME</a>
    <a class="a1" href="{{route('event')}}">EVENTS</a>
    <a class="a1" href="{{route('about')}}">ABOUT US</a>
    <a class="a1" href="{{route('research')}}">RESEARCH</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<nav>
<a class="link" href="{{route('home')}}">HOME</a>
    <a class="link" href="{{route('research')}}">RESEARCH</a>
    <a class="link" href="{{route('event')}}">EVENTS</a>
    <a class="link" href="{{route('about')}}">ABOUT US</a>
    <a class="link hl" href="{{route('contact')}}">CONTACT US</a>
</nav>
<div class="img1"></div>
<div class="container">
<div class="row1">
    <div class="head1">Contact Us</div>
    <div class="col1">
   <div class="n name1">Anirban Chakraborty</div>
   <div class="n position1">Deputy Director,Nitte University Centre for Science, Education & Research</div>
<div class="n address1">P.O Deralakatte, Mangalore - 575018</div>
<div class="n email1">Email: anirban@nitte.edu.in</div>
<div class="n phone1">+91 70221 29624</div>
    </div>
    <div class="col2">
        <div class="n name1">Arati Khanna-Gupta</div>
        <div class="n position1">Consultant in Precision Medicine <br>(Hematology, Oncology and Bone Marrow Failures)</div>
        <div class="n">CEO, SriGene LLC</div>
       <div class="n" >Ex Assistant Professor of Medicine, Harvard Medical School, Boston, USA</div>
     <div class="n email1">Email: arati1239@gmail.com</div>
    </div>
</div>
<br>
<div class="row2">
        <iframe  id="gmap_canvas" src="https://maps.google.com/maps?q=Nitte%20University%20Centre%20for%20Science%20%20Education%20%26%20Research%20%20P.O%20Deralakatte%2C%20Mangalore%20-%20575018&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</div>
</div>
<footer>
    <div class="row11">
<div class="col11">
    <img class="l2" src="logo3.png" alt="logo">
</div>
<div class="col22">
    <p><q>Bringing together clinicians and researchers under one platform to improve clinical therapies and outcomes for the patients.</q></p>
</div>
    </div>
    <div class="col33">
        <div class="row22">
            <p>Supported by- <a target="_blank" href="https://nitte.edu.in/" >Nitte University </a></p>
            <style> a{text-decoration: none;
           color:rgb(183, 193, 195);}</style>
        </div>
        <div class="row33">
            <p>Copyright @ 2019 Powered by Inspirante Technologies Pvt Ltd</p>
        </div>
    </div>
</footer>
</div>
</body>
<script  type="text/javascript">
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
</html>


<!-- /* {    background: linear-gradient(-180deg, #BCC5CE 0%, #929EAD 98%), radial-gradient(at top left, rgba(255,255,255,0.30) 0%, rgba(0,0,0,0.30) 100%);
        background-blend-mode: screen; */ -->
