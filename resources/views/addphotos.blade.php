<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="{{url('css/dashboard.css')}}">
  <link rel="stylesheet" href="{{url('css/addphotos.css')}}">

</head>
<body>
@include('layout.dashboard')
<div class="col2">
<form action="{{route('addphotos')}}"  method="POST"   enctype="multipart/form-data" >
    @csrf
<div class="addform">
     <div class="t2">-Upload Photos-</div>
    <div class="addform1">

    <div class="input1 in1">
        <br>
            <input class="input3" type="file" id="photo" accept="image/*"  name="photo"   >
       </div>
       </div>
<div >
<input class="input2" type="submit" name="submit">

</div>


</div>







</form>
</div>
</body>
</html>

