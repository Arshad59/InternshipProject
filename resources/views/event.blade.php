<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRGBMD-events</title>
    <link rel="stylesheet" href="{{asset('css/events.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="bg">
<div class="logo" >
<a href="{{route('home')}}"><img class="l1" src="logo3.png" alt="logo"></a>
</div>


<div class="topnav">
  <a href="{{route('event')}}" class="active">EVENTS</a>
  <div id="myLinks">
    <a class="a1" href="{{route('home')}}">HOME</a>
    <a class="a1" href="{{route('research')}}">Research</a>
    <a class="a1" href="{{route('about')}}">ABOUT US</a>
    <a class="a1" href="{{route('contact')}}">CONTACT US</a>

  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>



<nav>
<a class="link" href="{{route('home')}}">HOME</a>
    <a class="link" href="{{route('research')}}">RESEARCH</a>
    <a class="link hl" href="{{route('event')}}">EVENTS</a>
    <a class="link" href="{{route('about')}}">ABOUT US</a>
    <a class="link" href="{{route('contact')}}">CONTACT US</a>
</nav>

<div class="button-container">
<button id="b1" onclick="show1()">EVENTS</button>
<button id="b2"  onclick="show2()">GALLERY</button>
</div>
<div id="container1">
<div class="head1">Events Conducted</div>
<div class="events">
@foreach($events as $eve)
<div class="card" >
    <img src="{{ asset('storage/'.$eve->photo)}} " class="im" alt="...">
    <div class="card-body">
      <div class="card-title">{{$eve->event_topic}}</div>
     <div class="bdr"> <p style="text-align:justify;"class="card-text">{{$eve->event_description}}</p>
      <p style="text-align:center;" class='card-text'>Date:{{$eve->event_date}}</p>
       <p style="text-align:center;" class='card-text'>Venue:{{$eve->event_venue}}</p>
      <br>
    </div>
  </div></div>
@endforeach
</div>
</div>

<div id="container2">
  <div class="pic-container">

    @foreach($data as $img)
<img class="im1" src="{{ asset('storage/gallery/'.$img->photos)}} " alt="">
@endforeach

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
</footer></div>
</body>
<script type="text/javascript">
function show1()
{
document.getElementById('container1').style.display="block";
document.getElementById('container2').style.display="none";
}
function show2()
{
document.getElementById('container1').style.display="none";
document.getElementById('container2').style.display="block";
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
