<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="{{url('css/dashboard.css')}}">
  <link rel="stylesheet" href="{{url('css/table.css')}}">
</head>
<body>
@include('layout.dashboard')
<div class="row2">
<div class="col2">
<table>
    <thead>
        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Position</th>
        <th>Affiliation</th>
        <th>Committee</th>
        <th>Photo</th>
    </tr>
    </thead>
    <tbody>
    @foreach($members as $member)
        <tr>
             <td>{{$member->name}}</td>
             <td>{{$member->email}}</td>
             <td>{{$member->position}}</td>
             <td>{{$member->affiliation}}</td>
             <td>{{$member->committee}}</td>
             <td><img src="{{asset('storage/'.$member->photo)}}" alt="/img" style="height:70px; weight:70px;"></td>
              <td><a href="{{url('/viewmember')}}/{{$member->id}}">
                <button>Delete</button></a>
            </td>
            <td><a href="{{ url('/addmember')}}/{{$member->id}}">
                <button>Edit</button></a>
            </td>
        </tr>
     @endforeach
    </tbody>
</table>
</div>
</div>
</body>
</html>
