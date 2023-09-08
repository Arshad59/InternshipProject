<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update-Members</title>
    <link rel="stylesheet" href="{{url('css/addmember.css')}}">
    <link rel="stylesheet" href="{{url('css/dashboard.css')}}">
</head>
<body>
@include('layout.dashboard')
<div class="col2">
<div class="title1">Enter the new details</div>
<form action="{{$url}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="addform">
        <div class="addform1">
            <div class="input1">
            <label for="name">Name:
            <input id="name"type="text" class="input-form" name="Name" value="{{$members->name}}" placeholder="Enter full name" required>
        </label>
            </div>
<div class="input1">
<label for="mail">Email:
            <input id="mail" type="email" class="input-form" name="email" value="{{$members->email}}"  placeholder="abcd1234@gmail.com" required>
        </label>
     </div>

     <div class="input1">
     <label for="affiliation">Affiliation:
            <input id="affiliation" type="text" class="input-form" name="affiliation" value="{{$members->affiliation}}" required>
        </label>
     </div>

     <div class="input1">
     <label for="">Position:
            <input type="text" id="position" class="input-form" name="position"  value="{{$members->position}}"  required>
        </label>
     </div>
       <div class="input1">
       <label for="photo">Upload photo:
            <input type="file"id="photo" accept="image/*" class="input-form" name="photo" >
        </label>
       </div>
 <div class="input1">
 <input class="input2" type="submit" name="submit">
        </div>
 </div></div>
    </form>





</div>
</body>
</html>



