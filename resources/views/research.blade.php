<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRGBMD-research</title>
    <link rel="stylesheet" href="{{asset('css/research.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="bg">
<div class="logo" >
<a href="{{route('home')}}"><img class="l1" src="logo3.png" alt="logo"></a>
</div>

<div class="topnav">
  <a href="{{route('research')}}" class="active">RESEARCH</a>
  <div id="myLinks">
    <a class="a1" href="{{route('home')}}">HOME</a>
    <a class="a1" href="{{route('event')}}">EVENTS</a>
    <a class="a1" href="{{route('about')}}">ABOUT US</a>
    <a class="a1" href="{{route('contact')}}">CONTACT US</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>


<nav>
<a class="link" href="{{route('home')}}">HOME</a>
    <a class="link hl" href="{{route('research')}}">RESEARCH</a>
    <a class="link" href="{{route('event')}}">EVENTS</a>
    <a class="link" href="{{route('about')}}">ABOUT US</a>
    <a class="link" href="{{route('contact')}}">CONTACT US</a>
</nav>
<div class="img1">
<div class="heading">
    <h3>REASEARCH</h3>
</div>
</div>
<div class="head2">Research: Present & Past</div>
<p class="head1">Over the past 9 months, the CRG.BMD team has been involved with the following Rare genetic disease studies. The results, when published, should shed light on these disease in the Indian contex.</p>
    <div class="button-container">
    <button id="b1" onclick="show1()" >Research</button>
    <button id="b2" onclick="show2()">Publications</button>
</div>
<div id="content">
    <div class="r1">Ongoing Research:</div>
    @foreach($research as $res)
<div class="container">
    <div class="box1">
       <div class="rt">{{$res->research_topic}}</div> <br>
         @if(!is_null($res->subtitle1))
        <b>{{$res->subtitle1}}:</b>
        <br>
         {{$res->description1}} <br><br>
         @endif
         @if(!is_null($res->subtitle2))
        <b>{{$res->subtitle2}}:</b>
        <br>
         {{$res->description2}} <br><br>
         @endif
         @if(!is_null($res->subtitle3))
        <b>{{$res->subtitle3}}:</b>
        <br>
         {{$res->description3}} <br><br>
         @endif
         @if(!is_null($res->subtitle4))
        <b>{{$res->subtitle4}}:</b>
        <br>
         {{$res->description4}} <br><br>
         @endif
         @if(!is_null($res->subtitle5))
        <b>{{$res->subtitle5}}:</b>
        <br>
         {{$res->description5}} <br><br>
         @endif
         @if(!is_null($res->subtitle6))
        <b>{{$res->subtitle6}}:</b>
        <br>
         {{$res->description6}} <br><br>
         @endif
         @if(!is_null($res->subtitle7))
        <b>{{$res->subtitle7}}:</b>
        <br>
         {{$res->description7}} <br><br>
         @endif
         @if(!is_null($res->subtitle8))
        <b>{{$res->subtitle8}}:</b>
        <br>
         {{$res->description8}} <br><br>
         @endif

    </div>
</div>
@endforeach
    <div class="r11">Past Research:</div>
<div class="container">
<div class="box1">
Studies over the past several years have demonstrated the knowledge and expertise that both co-founders have gained in the areas of Rare genetic diseases and bone marrow failure syndromes. A selected list of publications attest to these achievements.
</div>
</div>
</div>
<div id="content1">
    <div class="part1">
    <div class="pb1">
        <div class="t1">
            <img class="dp1" src="anirban chakraborty.jpg" alt="picture">
       <div class="h33"><b>Anirban Chakraborty, PhD
</b> </div>
        </div>
        <div class="ic1"><img class="pi1" src="publication1.jpeg" alt="publication-image">
        </div><br>
        <div id="p1" >
        <ul>
            <li>Alexis H Bennett, Marie Francoise O’Donohue, Stacey R Gundry, Aye T Chan, Jeffery Widrick, Isabelle Draper, Anirban Chakraborty, Yi Zhou, Leonard I Zon, Pierre-Emmanuel Gleizes, Alan H Beggs, and Vandana Gupta. 2018. RNA helicase, DDX27 regulates skeletal muscle growth and regeneration by modulation of translational processes. PLoS Genetics 14(3): e1007226</li>
            <li>
                Anirban Chakraborty, Tamayo Uechi, Yukari Nakajima, Hanna T. Gazda, Marie-Françoise O’Donohue, Pierre-Emmanuel Gleizes, and Naoya Kenmochi. 2018. Cross talk between TP53 and c-Myc in the pathophysiology of Diamond-Blackfan anemia: Evidence from RPL11-deficient in vivo and in vitro models. Biochemical and Biophysical Research Communications 495: 1839- 1845.
            </li>
            <li>
                Anirban Chakraborty and Indrani Karunasagar. 2015. Faulty ribosomes and human diseases: mistakes in “assembly line” going unnoticed? Nitte University Journal of Health Science
            </li>
            <li>Henras A., Plisson-Chastang C., O'Donohue M-F, Anirban Chakraborty, Gleizes P-E. 2014. An overview of pre-ribosomal RNA processing in eukaryotes. Wiley Interdisciplinary Reviews: RNA, 6: 225-242</li>
        </ul>
        </div>
    </div>
    <div class="btn-container">
        <button onclick="show3()" id="btn1">Read More</button>
    </div>
<div id="part2">
        <div id="pb2">
            <div id="p2">
<ul>
    <li>
        G. V. Yadav, Anirban Chakraborty, T. Uechi, and N. Kenmochi. 2014. Ribosomal protein deficiency causes Tp53-independent erythropoiesis failure in zebrafish. The International Journal of Biochemistry & Cell Biology 49: 1-7.
    </li>
    <li>
        Anirban Chakraborty and N. Kenmochi. 2012. Ribosomes and Ribosomal Proteins: More than just ‘housekeeping’.  eLS. John Wiley and Sons Ltd, Chichester. http://www.els.net/ [DOI: 10.1002/9780470015902.a0005055.pub2]
    </li>
    <li>
        S. Higa-Nakamine, T. Suzuki, T. Uechi, Anirban Chakraborty, Y. Nakajima, M. Nakamura, N. Hirano, T. Suzuki, and N. Kenmochi. 2012. Loss of ribosomal RNA modification causes developmental defects in zebrafish. Nucleic Acids Research 40:391-398.
    </li>
    <li>
        H. Torihara, T. Uechi, Anirban Chakraborty, M. Shinya, N. Sakai, and N. Kenmochi. 2011. Erythropoiesis failure due to RPS19 deficiency is independent of an activated p53 response in a zebrafish model of Diamond-Blackfan anaemia. British Journal of Hematology 152:648-654.
    </li>
    <li>
        Anirban Chakraborty, T. Uechi, S. Higa, H. Torihara and N. Kenmochi. 2009. Loss of ribosomal protein L11 affects zebrafish embryonic development through a p53-dependent apoptotic response. PLoS ONE 4(1): e4152.
    </li>
    <li>
        T. Uechi, Y. Nakajima, Anirban Chakraborty, H. Torihara, S. Higa and N. Kenmochi. 2008. Deficiency of ribosomal protein S19 during early embryogenesis leads to reduction of erythrocytes in a zebrafish model of Diamond-Blackfan anemia. Human Molecular Genetics 17: 3204-3211.
    </li>
    <li>
        T. Uechi, Y. Nakajima, A. Nakao, H. Torihara, Anirban Chakraborty, K. Inoue, and N. Kenmochi 2006.  Ribosomal Protein Gene Knockdown Causes Developmental Defects in Zebrafish. PLoS ONE 1: e37.
    </li>
</ul>
</div>

        </div>
    </div>
    <div class="btn-container">
        <button onclick="show4()" id="btn2">Read less</button>
    </div>
</div>
<br><br>



<div class="part1">
    <div class="pb1">
        <div class="t1">
            <img class="dp1" src="aarati khanna.jpg" alt="picture">
       <div class="h33"><b>Arati Khanna-Gupta, PhD
</b> </div>
        </div>
        <div class="ic1"><img class="pi1" src="publication1.jpeg" alt="publication-image">
        </div><br>
        <div id="p3" >
        <ul>
            <li>Khanna-Gupta A, Berliner N. Vitamin B3 boosts neutrophil counts. Nat Med. 2009 Feb;15(2):139-41. doi: 10.1038/nm0209-139.PMID: 19197286</li>
            <li>
                Dutt S, Narla A, Lin K, Mullally A, Abayasekara N, Megerdichian C, Wilson FH, Currie T, Khanna-Gupta A, Berliner N, Kutok JL, Ebert BL. Haploinsufficiency for ribosomal protein genes causes selective activation of p53 in human erythroid progenitor cells. Blood 2011, 117(9):2567-76 (Plenary Paper)
            </li>
            <li>
                Payne E, Virgilio M, Narla A, Sun H, Levine M, Paw BH, Look AT, Ebert B, Khanna-Gupta, A Treatment of L-Leucine in both in vivo and in vitro models of ribosomopathies (Diamond Blackfan Anemia (DBA) and 5q- syndrome ((del) 5q) results in an improvement of anemia and developmental defects: evidence for a common pathway. 2012. Blood. 120, 2214-24
            </li>
            <li>Narla, A, Abayasekara N, Payne E, Hurst SL, Look AT, Berliner N, Ebert BL, Khanna-Gupta, A. L-Leucine improves the anemia of Diamond Blackfan Anemia and 5q- syndrome in a p53- independent way. 2014. Br. J Haematol. 2014</li>
        </ul>
        </div>
    </div>
    <div class="btn-container">
        <button onclick="show5()" id="btn3">Read More</button>
    </div>
<div id="part3">
        <div id="pb3">
            <div id="p4">
<ul>
    <li>
        Abayasekara S and Khanna-Gupta, A Translation Control in Myeloid Disease. In Lawrie CH (ed) Hematology- Science and Practice. 2012. ISBN 979-953-307-516-6 30.
    </li>
    <li>
        Khanna-Gupta, A. Bone Marrow failure syndromes: the Ribosomopahies. Journal of Bone Marrow Research. 2013. 1: 106 2013. 31.
    </li>
    <li>
        Narla, A, Abayasekara N, Payne E, Hurst SL, Look AT, Berliner N, Ebert BL, Khanna-Gupta, A. L-Leucine improves the anemia of Diamond Blackfan Anemia and 5q- syndrome in a p53- independent way. 2014. Br. J Haematol. 2014

    </li>
    <li>
        Shalini H Kumar, Kalpana A, Manikandan Suraj, Mary Shoba Das C, Aparna M, Divya J, Jaicy A, Priya K, Ragav Krishna, Arati Khanna-Gupta and Lakshmi BR Comprehensive genetic analysis of 961 unrelated Duchenne Muscular dystrophy patients: focus on diagnosis, prevention and therapeutic possibilities PLOS ONE. 2020, Jun 19;15(6):e0232654. doi: 10.1371/journal.pone.0232654.eCollection 2020.PMID: 32559196
    </li>
</ul>
</div>

        </div>
    </div>
    <div class="btn-container">
        <button onclick="show6()" id="btn4">Read less</button>
    </div>
</div>
</div>
<br>
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
document.getElementById('content').style.display="block";
document.getElementById('content1').style.display="none";
}
function show2(){
document.getElementById('content').style.display="none";
document.getElementById('content1').style.display="block";
}
function show3(){
document.getElementById('part2').style.display="block";
document.getElementById('btn1').style.display="none";
document.getElementById('btn2').style.display="block";
}
function show4(){
document.getElementById('part2').style.display="none";
document.getElementById('btn1').style.display="block";
document.getElementById('btn2').style.display="none";
}
function show5(){
document.getElementById('part3').style.display="block";
document.getElementById('btn3').style.display="none";
document.getElementById('btn4').style.display="block";
}
function show6(){
document.getElementById('part3').style.display="none";
document.getElementById('btn3').style.display="block";
document.getElementById('btn4').style.display="none";
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
