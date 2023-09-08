<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="{{url('css/dashboard.css')}}">
  <link rel="stylesheet" href="{{url('css/viewphotos.css')}}">
</head>
<body>

@include('layout.dashboard')
<div class="main">
<div class="row2">
    <div class="col2">

        @foreach($photos as $photo)
        <div class="photo">
            <img class="p1"src="{{asset('storage/gallery/'.$photo->photos)}}" alt="img">
        </div>
        @endforeach
    </div>
    </div>
</div>
</body>
</html>
