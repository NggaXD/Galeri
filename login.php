<?php
require 'function.php';
if(isset($_POST['login'])){
    if(login($_POST) > 0){
        header('location: index.php');
        exit;
    }else{
        header('location: login.php');
        exit;
    }
}
?>

<html>

<head>
    <title>form login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <main>
        <section>

            <div class="Leaves">
                <div class="set">

                    <div><img src="leaf_01.png"></div>

                    <div><img src="leaf_02.png"></div>
                    <div><img src="leaf_03.png"></div>

                    <div><img src="leaf_01.png"></div>

                    <div><img src="leaf_02.png"></div>

                    <div><img src="leaf_03.png"></div>

                </div>

            </div>

            <img src="bg.jpg" class="bg">

            <img src="girl.png" class="girl">

            <form method="post">
                <div class="login">

                    <h2>Sign In</h2>

                    <div class="inputBox">
                        <input id="inputUsername" name="username" type="text" placeholder="Username" required>

                    </div>

                    <div class="inputBox">

                        <input id="inputPassword" name="password" type="password" placeholder="Password" required>
                    </div>

                    <div class="inputBox">
                        <input type="submit" name="login" value="login" id="btn">

                    </div>

                </div>
            </form>
            <div class="group">

                <a href="#"> Forget Password</a>

                <a href="register.php">Sign Up</a>

            </div>

            </div>

            <img src="trees.png" class="trees">

        </section>

    </main>
</body>

</html>