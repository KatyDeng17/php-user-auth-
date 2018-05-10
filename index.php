<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</head>
<body>
  <div class="container">
    <h1 class="center">PHP User Authentication</h1>
    
    <h2 class= 'center red-text darken-2'><?= isset($_GET['auth_error']) ? 'Invalid username and /or password' : '' ?></h2>

    <div class="row">
     <form action="./db_auth.php" method = "POST" class="col s12">
       <div class="row">
            <div class="input-field col s6">
                  <!-- <label for="userName">Username</label> -->
                  <input type="text" name = "username" id="userName">
                  <label for="userName">Username</label>
            </div>
            <div class="input-field col s6">
                    <!-- <label for="userName">password</label> -->
                    <input type="password" name = "password" id="password">
                    <label for="password">password</label>
            </div>
            <div class="row center">
                <button class="btn">sign in</button>
            </div>
       </div>
     </form>
    </div>
  </div>
</body>
</html>