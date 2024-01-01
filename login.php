<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- THIS IS BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- OUR STYLESHEETS-->
    <link rel="stylesheet" href="CSS/default.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fo nts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- JS -->
    <script type="text/javascript" src="JS/main.js"></script>
    <title>SG - Login Page</title>
</head>
<body>
    <main>
        <section id="login-area">
            <div id="login-box">
                <div id="login-side">
                    <form action="includes/formhandler.php" method="post" id="login-form"> 
                        <h1 class="login-contents"> LOGIN </h1>
                        <label class="login-contents" for="password">Insira a senha para entrar no sistema da Scarlett Gateway. </label>
                        <input class="login-contents" type="password" placeholder="Entre a senha" name="password" required>
                        <input type="submit" value="Fazer login" class="login-contents">
                    </form>

                </div>
                <div id="image-side"></div>        
            </div>
            

        </section>
    </main>
</body>
</html>