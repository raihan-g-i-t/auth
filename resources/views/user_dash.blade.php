<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  <link rel="stylesheet" href="{{asset('css/user_dash.css')}}">
</head>
<body>


  <!-- Sidebar Navigation -->
  <div class="sidebar">
    <h2>User Dashboard</h2>
    <a href="{{route('user.overview')}}" class="active">Overview</a>
    <a href="#profile">Profile</a>
    <a href="{{route('logout')}}">logout</a>
    </div>

    <div>
      @yield('main_section')
    </div>

</body>
