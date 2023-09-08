<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Login</title>
    <link rel="stylesheet" href="{{url('css/adminlogin.css')}}">
</head>
<body>
    <div class="main-container">
        <div class="msg2">
        @if(Session::has('success'))
   <div>{{Session::get('success')}}</div>
   @endif
   @if(Session::has('fail'))
   <div class="alert">{{Session::get('fail')}}</div>
   @endif
        </div>
        <div class="container">
            <div class="title">
            SIGN IN
            </div>
<div class="addform">
<form class="input1" action="{{ route('admin') }}" method="POST">
   @csrf
  <div class="login">
      <label class="form-label">EMAIL:</label>
      <div class="in1">
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email" aria-describedby="emailHelp" value="{{old('email')}}"></div>
     </div>
    <div class="login">
     <label class="form-label">PASSWORD:</label>
<div class="in1">
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" ></div>
    </div>
    <div class="login1" >
  <button type="submit" class="btn" name="submit">SIGN IN</button>
  </div>
  </form>
</div>
 </div>
</div>
</body>
</html>
