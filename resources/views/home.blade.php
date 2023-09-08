<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRGBMD-HOME</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="bg">
<div class="logo" >
<a href="{{route('home')}}"><img class="l1" src="logo3.png" alt="logo"></a>
</div>

<div class="topnav">
  <a href="{{route('home')}}" class="active">HOME</a>
  <div id="myLinks">
    <a class="a1" href="{{route('research')}}">RESEARCH</a>
    <a class="a1" href="{{route('event')}}">EVENTS</a>
    <a class="a1" href="{{route('about')}}">ABOUT US</a>
    <a class="a1" href="{{route('contact')}}">CONTACT US</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


<nav>
    <a class="link hl" href="{{route('home')}}">HOME</a>
    <a class="link" href="{{route('research')}}">RESEARCH</a>
    <a class="link" href="{{route('event')}}">EVENTS</a>
    <a class="link" href="{{route('about')}}">ABOUT US</a>
    <a class="link" href="{{route('contact')}}">CONTACT US</a>

</nav>


<br>
<div class="img1">
<img class="logo4" src="logo2.png" alt="image">
</div><div class="heading">Consortium of Rare Genetic and Bone Marrow Disorders India Network@NITTEDU (CRG.BMD|IN)</div>
<div class="container">
<div class="home-content">
<div class="content-col1">
<div class="para1"><ul>
    <li>India is the second most populous country in the world with a population of about <b>1.38 billion people</b>, and growing.</li>
<li>It is estimated that nearly <b>72-96 million</b> individuals in India suffer from a rare, orphan or neglected disease, defined by the World Health Orgainzation (WHO) as having a prevalence of < 5 per 10,000 individuals.</li>
<li>6000-8000 Rare diseases have been identified the world over of which about <b>450</b> have been reported in India.</li>
<li>The study and understanding of Rare Diseases in India is particularly poignant and necessary given the <b>high degree of endogamy</b> practiced in communities as well the large number of <b>consanguineous marriages</b>, leading to an <b>unusually high number of autosomal recessive genetic diseases observed.</b></li>
</ul><button onclick="show1()" id="btn1" classz="btn1">Read More</button>
</div>
<div class="para2" id="para2"><ul>
    <li>An estimated 1 in 20 children born in urban India suffers from a rare disease, therefore the need to accurately document and study these disorders in a systematic manner is urgent and imminent</li>
    <li>Given the enormity of the issue of rare genetic diseases in India, no single entity, governmental or non-governmental, can be expected to take on the task of identifying, diagnosing, treating and counseling all Indian patients with rare genetic disorders</li>
    <li>In light of this we have formed a non=profit consortium:<b>The Consortium of Rare Genetic and Bone Marrow Disorders, CRG.BMD)</b> at NITTE University, in Mangalore (Karnataka)</li>
</ul><button onclick="show2()" id="btn2">Read Less</button></div>
</div>

<div class="content-col2">
<div class="video">
    <iframe class="yt"  src="https://www.youtube.com/embed/GbgOsCOcV6g" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
    </iframe>
</div></div>
</div></div>
<div class="vm">
<div class="vision">
<h2 class="mv"><b>Vision</b></h2>
<p>
    To build a collaborative network of health care providers and scientists to decode the molecular underpinnings and understand the extent of rare genetic and bone marrow failure disorders in India.
</p>
</div>
<div class="mission">
<h2 class="mv"><b>Mission</b></h2>
<span>By identifying the genetic cause of rare genetic diseases and bone marrow failure syndromes and unraveling the underlying disease biology, we aspire to provide new and innovative insights leading to improved targeted therapeutic options for.</span>
</div>
</div>
<div class="tem">
    <div class=" b members">
<img class="im m" src="team.png" alt="members">
<h2>{{$mcount}}</h2>
<h3>Registered Members</h3>
</div>
    <div class="b event">
<img class="im e" src="event.png" alt="events">
<h2>{{$evecount}}
</h2>
<h3>Events</h3>
    </div>
    <div class=" b team">
<img class="im t" src="team.png" alt="team">
<h2>30</h2>
    <h3>Team Members</h3>
    </div>
</div>
<footer>
    <div class="row1">
<div class="col1">
    <img class="l2" src="logo3.png" alt="logo">
</div>
<div class="col2">
    <p><q>Bringing together clinicians and researchers under one platform to improve clinical therapies and outcomes for the patients.</q></p>
</div>
    </div>
    <div class="col3">
        <div class="row2">
            <p>Supported by- <a target="_blank" href="https://nitte.edu.in/">Nitte University</a></p>
            <style> a{text-decoration: none;
           color:rgb(183, 193, 195);}</style>
        </div>
        <div class="row3">
            <p>Copyright @ 2019 Powered by Inspirante Technologies Pvt Ltd</p>
        </div>
    </div>
</footer>
</div>
</body>

<script type="text/javascript">
function show1(){
document.getElementById('para2').style.display="block";
document.getElementById('btn1').style.display="none";
document.getElementById('btn2').style.display="block";
}
function show2(){
document.getElementById('para2').style.display="none";
document.getElementById('btn1').style.display="block";
document.getElementById('btn2').style.display="none";
}

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
