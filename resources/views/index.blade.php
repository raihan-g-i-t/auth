<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      margin: 0;
      background-color: #f0f0f0;
    }

    .container {
      text-align: center;
      padding: 40px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 300px;
    }

    h1 {
      font-size: 24px;
      color: #333;
      margin-bottom: 30px;
    }

    .btn {
      display: block;
      width: 100%;
      padding: 10px 0;
      margin: 10px 0;
      font-size: 16px;
      color: #fff;
      background-color: #007bff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
      transition: background-color 0.3s;
    }

    .btn:hover {
      background-color: #0056b3;
    }

    .register {
      background-color: #28a745;
    }

    .register:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Welcome</h1>
    <a href="{{route('login')}}" class="btn login">Login</a>
    <a href="{{route('registration')}}" class="btn register">Register</a>
  </div>

</body>
</html>
