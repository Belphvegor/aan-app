<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <title>Login Form</title>
    <link rel="stylesheet" href="{{asset('build/landing-page/styleLogin.css')}}" />
  </head>
  <body>
    <div class="container">
      <div class="login-form">
        <h2>Coffee <span>Code</span></h2>
        <form>
          <label for="username">Username</label>
          <input type="text" id="username" placeholder="Enter your username" />
          <label for="password">Password</label>
          <input
            type="password"
            id="password"
            placeholder="Enter your password"
          />
          <button type="submit">Login</button>
          <p>
            Don't have an account?
            <a href="register.html">Sign up</a>
          </p>
        </form>
      </div>
    </div>

    <script src="{{asset('build/landing-page/Untitled-1.js')}}"></script>
  </body>
</html>
