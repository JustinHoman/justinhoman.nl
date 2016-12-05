<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Justin Homan</title>
  </head>
  <body>
    <header>
      <div class="left">
        <h1 class="header">www.justinhoman.nl</h1><b>/login</b>
      </div>
      <div class="right">
        <nav>
          <ul class="nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="brandweer.html">Brandweer</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a class="active" href="#">Login</a></li>
          </ul>
        </nav>
      </div>
      <div class="clear"></div>
    </header>

    <section>
      <form class="login" action="checklogin.php" method="post">
        <table>
          <tr>
            <td>
              <input type="text" name="username" placeholder="Gebruikersnaam" required>
            </td>
          </tr>
          <tr>
            <td>
              <input type="password" name="password" placeholder="Wachtwoord" required>
            </td>
          </tr>
          <tr>
            <td>
              <input type="submit" name="" value="Login">
            </td>
          </tr>
        </table>
      </form>
    </section>
  </body>
</html>
