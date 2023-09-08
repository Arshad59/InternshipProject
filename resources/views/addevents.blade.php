<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
   <link rel="stylesheet"href="{{url('css/dashboard.css')}}">
  <link rel="stylesheet" href="{{url('css/addevents.css')}}">
</head>
<body>
@include('layout.dashboard')
<div class="col2">
<div class="title1">Enter the event details</div>
<form action="{{route('addevents')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="addform">
            <div class="addform1">
                <div class="input1">
                <label for="event_title">Enter Event Title:
            <input  id="event_title" type="text" class="input-form" name="event_title"  required>
        </label>
                </div>

                <div class="input1">
        <label for="event_description">Event Description:
            <input  id="event_description" type="text" class="input-form" name="event_description"  required>
        </label>
        </div>
        <div class="input1">
        <label for="event_date">Event Event Date:
            <input  id="event_date" type="date" class="input-form" name="event_date" required>
        </label>
        </div>
        <div class="input1">
        <label for="event_venue">Event Event Venue:
            <input  id="event_venue" type="text" class="input-form" name="event_venue"  required>
        </label>
        </div>

        <div class="input1">
        <label for="eventphoto">Upload event photo:
            <input  type="file"id="eventphoto" accept="image/*" class="input-form" name="eventphoto" required>
        </label>
        </div>

        <div class="input2">
        <input type="submit" name="submit">
        </div>
        </div>
        </div>
    </form>
</div>
</body>
</html>
