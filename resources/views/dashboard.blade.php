<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="{{url('css/dashboard.css')}}">
</head>
<body>
    <style>
        body{
            overflow:hidden;
        }
        .container{
            width:100%;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            position:absolute;
            top:20%;
            left:10%;
        }
        .count{
         display:inline-block;
         font-size:25px;
         border-bottom:1px solid lightgrey;
        }
        span{
            font-weight:lighter;
            margin-left:10px;
        }
    </style>
  @include('layout.dashboard')
  <div class="container">
    <div class="count">
        <h4>Members Registered:<span>{{$memcount}}</span></h4>
    </div>
    <div class="count">
       <h4>Events Organised:<span>{{$evecount}}</span></h4>

    </div>
    <div class="count">
       <h4>Research Conducted:<span>{{$rescount}}</span></h4>

    </div>
    <div class="count">
       <h4>Number Of Photos:<span>{{$photocount}}</span></h4>

    </div>
  </div>
</body>
</html>
