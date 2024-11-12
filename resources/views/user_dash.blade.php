<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
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
      width: 220px;
      background-color: #34495e;
      color: #fff;
      padding-top: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .sidebar h2 {
      margin-bottom: 30px;
    }

    .sidebar a {
      text-decoration: none;
      color: #bdc3c7;
      padding: 12px 0;
      width: 100%;
      text-align: center;
      font-size: 16px;
      transition: background-color 0.3s;
    }

    .sidebar a:hover,
    .sidebar a.active {
      background-color: #1abc9c;
      color: #fff;
    }

    /* Main content styling */
    .main-content {
      flex: 1;
      padding: 20px;
      overflow-y: auto;
    }

    .header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .header h1 {
      font-size: 28px;
      color: #333;
    }

    .profile-summary {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .profile-summary img {
      width: 60px;
      height: 60px;
      border-radius: 50%;
    }

    .profile-summary div {
      color: #333;
    }

    .cards {
      display: flex;
      gap: 20px;
      margin-bottom: 20px;
    }

    .card {
      flex: 1;
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

    .notifications, .quick-actions {
      margin-top: 20px;
    }

    .notifications h3, .quick-actions h3 {
      margin-bottom: 10px;
    }

    .notification-item, .action-item {
      background-color: #fff;
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      font-size: 14px;
      color: #333;
    }
  </style>
</head>
<body>

  <!-- Sidebar Navigation -->
  <div class="sidebar">
    <h2>User Dashboard</h2>
    <a href="#overview" class="active">Overview</a>
    <a href="#profile">Profile</a>
    <a href="{{route('logout')}}">logout</a>
