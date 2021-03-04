<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title> 
    <link rel="stylesheet" href="view/css/logon.css">
  </head>

  <body>
    <span href="#" class="button" id="toggle-login">Log in</span>

<div id="login">
  <div id="triangle"></div>
  <h1>Log in</h1>
  <form action="control/anmeldung.php">
    <input type="email" name="benutzer" placeholder="Email" required/>
    <input type="password" name="password" placeholder="Password" required/>
    <input type="submit" value="Log in" />
  </form>
</div>
        <script src="control/js/index.js"></script>         
  </body>
</html>
