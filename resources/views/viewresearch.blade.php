<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="{{url('css/dashboard.css')}}">
  <link rel="stylesheet" href="{{url('css/viewresearch.css')}}">
</head>
<body>

@include('layout.dashboard')
<div class="main">
    <div class="row2">
<div class="col2">
@foreach($data as $res)
<div class="contents">
    <h4>Research Topic</h4>
        <p>{{$res->research_topic}}</p>
         @if(!is_null($res->research_background))
         <h4>Background:</h4>
         <p>{{$res->research_background}}</p>
         @endif
         @if(!is_null($res->methods))
         <h4>Methods:</h4>
         <p>{{$res->methods}}</p>
         @endif
         @if(!is_null($res->case_report))
         <h4>Case Report:</h4>
         <p>{{$res->case_report}}</p>
         @endif
         @if(!is_null($res->treatment))
         <h4>Treatment:</h4>
         <p>{{$res->treatment}}</p>
         @endif
         @if(!is_null($res->result))
         <h4>Result:</h4>
         <p>{{$res->result}}</p>
         @endif
         @if(!is_null($res->conclusion))
         <h4>Conclusion:</h4>
         <p>{{$res->conclusion}}</p>
         @endif
         </div>
    @endforeach
</div>
</div>

</div>
</body>
</html>
