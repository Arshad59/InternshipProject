<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="{{url('css/table.css')}}">
  <link rel="stylesheet" href="{{url('css/dashboard.css')}}">
</head>
<body>
    @include('layout.dashboard')
    <div class="row2">

        <div class="col2">
            <table>
                <thead>
                    <tr>
                        <th>Event Topic</th>
                        <th>Event Description</th>
                        <th>Event Date</th>
                        <th>Event Venue</th>
                        <th>Photo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $dat)
                    <tr>
                        <td>{{$dat->event_topic}}</td>
             <td>{{$dat->event_description}}</td>
             <td>{{$dat->event_date}}</td>
             <td>{{$dat->event_venue}}</td>
             <td><img src="{{asset('storage/'.$dat->photo)}}" alt="/img" style="height:200px; width:200px;"></td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

</body>
</html>
