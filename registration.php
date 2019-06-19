<html>
  <head>
    <script>
            if (password1 != password2) {
                    alert ("\nPassword did not match: Please try again...")
                    return false;
                }
            else{
                    alert("Password Match: Welcome to GeeksforGeeks!")
                    return true;
                }
            }
        </script>
    <meta charset="utf-8">
    <title>Sign In</title>
    <link rel="stylesheet" href="master.css">
  </head>
  <body>
    <h1 id="header">Art Gallary</h1>
    <div class="login">
      <a href="homepage.html"><button type="button" name="home_btn"><h3>Home</h3></button></a>
    </div>
    <div class="sign_in_form">
      <form class="form" action="registration.html" method="post" onsubmit="return checkPasscode(this)">
        <h1>SIGN IN</h1>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password"required>
        <input type="password" name="cPassword" placeholder="Confirm Password">
        <a href="aft_login.html"><input type="submit" name="submit_btn" value="Login"></a>
      </form>
    </div>
    <footer>
      <p>@Created By Kashish Gautam</p>
    </footer>
  </body>
</html>
