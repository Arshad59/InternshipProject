<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet"  href="{{url('frontend/css/login.css')}}">
  <title>Admin-Login</title>
</head>
<body>
<div class="container">
    <form action="{{route('login')}}" method="POST">
      @if(Session::has('success'))
      <div>{{Session::get('success')}}</div>
      @endif
      @if(Session::has('fail'))
      <div>{{Session::get('fail')}} </div>
      @endif
  {!!csrf_field()!!}
    <h1>Sign In</h1>
    <div class="login">
      <label class="form-label">USERNAME</label>
      <input type="email" class="form-control" id="name" name="name">
     </div>
    <div class="login">
     <label class="form-label">PASSWORD<span><a href=""> Forgot Password?</a></span></label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
    </div>
  <button type="submit" class="btn"  name="submit">SIGN IN</button>
  </form>
  </div>
</body>
</html>
