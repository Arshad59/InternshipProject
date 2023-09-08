<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="{{url('css/dashboard.css')}}">
  <link rel="stylesheet" href="{{url('css/addmember.css')}}">
</head>
<body>
@include('layout.dashboard')
<div class="col2">
<div class="title1">Enter the member details</div>
<form action="{{route('addmember')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="addform">
        <div class="addform1">
            <div class="input1">
            <label for="name">Name:
            <input id="name"type="text" class="input-form" name="Name" placeholder="Enter full name" required>
        </label>
            </div>

<div class="input1">
<label for="mail">Email:
            <input id="mail" type="email" class="input-form" name="email" required>
        </label>
     </div>

     <div class="input1">
     <label for="affiliation">Affiliation:
            <input id="affiliation" type="text" class="input-form" name="affiliation" required>
        </label>
     </div>
     <div class="input1">
     <label for="affiliation">Designation:
            <input id="affiliation" type="text" class="input-form" name="designation" required>
        </label>
     </div>

     <div class="input1">
     <label for="">Position:
            <input type="text" id="position" class="input-form" name="position"required>
        </label>
     </div>
     <div class="input1">
     <label for="committee">Committee:<br>
            <input type="radio" name="committee" value="advisory" id="advisory">Advisory Committee<br>
            <input type="radio" name="committee" value="managing" id="manage">Managing Committee<br>
            <input type="radio" name="committee" value="scientific" id="scientific">Scientific Committee<br>
            <input type="radio" name="committee"  value="all" id="all">All<br>
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








<!--
    <div class="logo">
        <img src="{{url('logo3.png')}}" alt="logo">
    </div>
    <div class="container">
        <div class="btn"><a href="{{route('addmember')}}">Add Member</a></div>
        <div class="btn"><a href="{{route('addevents')}}">Add Events</a></div>

        <div class="btn"><a href="{{route('addresearch')}}">Add Research</a></div>
        <div class="btn"><a href="{{route('deletemembers')}}">Delete Memebers</a></div>
        <div class="btn" id="homebtn"><a href="{{route('home')}}">HOME</a></div>
    </div>

    <form action="{{route('addmember')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="name">Name:
            <input id="name"type="text" class="input-form" name="Name" placeholder="Enter full name" required>
        </label>
        <label for="mail">Email:
            <input id="mail" type="email" class="input-form" name="email" placeholder="abcd1234@gmail.com" required>
        </label>
        <label for="affiliation">Affiliation:
            <input id="affiliation" type="text" class="input-form" name="affiliation" required>
        </label>
        <label for="">Position:
            <input type="text" id="position" class="input-form" name="position"placeholder="Member Secretary" required>
        </label>
        <label for="photo">Upload photo:
            <input type="file"id="photo" accept="image/*" class="input-form" name="photo" >
        </label>
        </fieldset>
        <input type="submit" name="submit">
    </form>
 -->
