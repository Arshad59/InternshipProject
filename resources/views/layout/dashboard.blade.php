<div class="row1">
     <div class="logo" >
          <img src="{{url('logo3.png')}}" class="logo"alt="logo">
        </div>
        <div class="logout">
        <a class="log1" href="{{route('logout')}}">Logout</a>
        </div>
  </div>
  </div>

  <div class="row2">

     <div class="col1">
     <br>
     <div class="nav-items">
<div class="dropdown item">
  <a href="#">Members</a>
  <div class="dropdown-content">
    <a href="{{route('addmember')}}">Add Members</a>
    <a href="{{route('deletemembers')}}">View Members</a>
  </div>
</div>
<div class="dropdown item">
  <a href="#">Events</a>
  <div class="dropdown-content">
    <a href="{{route('addevents')}}">AddEvents</a>
    <a href="{{route('view.events')}}">View Events</a>
  </div>
</div>
<div class="dropdown item">
  <a href="#">Research</a>
  <div class="dropdown-content">
    <a href="{{route('addresearch')}}">Add Research</a>
    <a href="{{route('view.research')}}">View Research</a>
  </div>
</div>
<div class="dropdown item">
  <a href="#">Gallery</a>
  <div class="dropdown-content">
    <a href="{{route('addphotos')}}">Add Photos</a>
    <a href="{{route('view.photos')}}">View Photos</a>
  </div>
  </div>
</div>




  </div>
