
<!DOCTYPE html>
<html lang="it">
<head>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active"> Login </h2>
            <!-- Icon -->
            <div class="fadeIn first">
            <img src="../img/logo login.png" />
            </div>

            <!-- Login Form -->
            <form>
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="email">
                <input type="password" id="password" class="fadeIn third" name="login" placeholder="password">
               <br> <button onclick="location.href='form_clienti.html'"  class="animazione" value="Log In">Log In</button>
            </form>
            <br>
            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a> <a class="underlineHover" href="#">Registrati</a>
            </div>

        </div>
    </div>
</body>
</html>