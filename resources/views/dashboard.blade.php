<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <style>
    /* General reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      display: flex;
      height: 100vh;
      background-color: #f0f2f5;
    }

    /* Sidebar styling */
    .sidebar {
      width: 250px;
      background-color: #2c3e50;
      color: #fff;
      display: flex;
      flex-direction: column;
      padding-top: 20px;
    }

    .sidebar h2 {
      text-align: center;
      font-size: 24px;
      margin-bottom: 30px;
    }

    .sidebar a {
      text-decoration: none;
      color: #bdc3c7;
      padding: 15px 20px;
      font-size: 16px;
      display: block;
      transition: background-color 0.3s;
    }

    .sidebar a:hover {
      background-color: #34495e;
      color: #fff;
    }

    .sidebar a.active {
      background-color: #1abc9c;
      color: #fff;
    }

    /* Main content styling */
    .main-content {
      flex: 1;
      padding: 20px;
    }

    .main-content h1 {
      font-size: 28px;
      color: #333;
      margin-bottom: 20px;
    }

    .cards {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }

    .card {
      flex: 1;
      min-width: 200px;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card h3 {
      font-size: 20px;
      margin-bottom: 10px;
      color: #333;
    }

    .card p {
      font-size: 14px;
      color: #666;
    }
  </style>
</head>
<body>

  <div class="sidebar">
    <h2>Dashboard</h2>
    <a href="#overview" class="active">Overview</a>
    <a href="#profile">Profile</a>
    <a href="#settings">Settings</a>
    <a href="#reports">Reports</a>
    <a href="{{route('logout')}}">Logout</a>
  </div>

  <div class="main-content">
    <h1>Welcome to the Dashboard</h1>

    <h1>Name: {{Auth::user()->name}}</h1>

    <div class="cards">
      <div class="card">
        <h3>Card 1</h3>
        <p>Some details about this card.</p>
      </div>
      <div class="card">
        <h3>Card 2</h3>
        <p>Some details about this card.</p>
      </div>
      <div class="card">
        <h3>Card 3</h3>
        <p>Some details about this card.</p>
      </div>
      <div class="card">
        <h3>Card 4</h3>
        <p>Some details about this card.</p>
      </div>
    </div>
  </div>

</body>
</html>
