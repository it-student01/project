<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - RentEasy</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/login.css" />
</head>
<body>

  <div class="login-container">
    <div class="login-box">
      <h2 class="main-heading">Welcome Back</h2>
      <p class="sub-heading">Login to your RentEasy account</p>

      <form id="loginform">
        <label for="username">Username</label>
        <input type="text" id="username" placeholder="Enter username" required />

        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Enter Password" required>
<!-- just exploring branches ,and how it works -->
        
      
       
       <button type="submit">Login</button>

       <p class="register-link">
        Dont have an account ?<a href="#">Register</a>

      </p> 
      </form>
    </div>
  </div>
  <script src="javascript/login.js"></script>
</body>
</html>
