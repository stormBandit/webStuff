<?php
    if (isset($_POST['username']) && isset($_POST['password'])){
        header('index.php');
    }

    if (isset($_POST['register'])){
        header('index.php');
    }
?>

<HTML>

<title>Login</title>

<BODY>
    <form method="post" action="login.php">
        <div>
            Username: <input type="text" id="username"> <br>
            Password: <input type="text" id="password"> <br>
            <button type="submit">Sign IN </button> <br>
        </div>

        <div class="inputWithBuffer">
            Not a member? Sign-Up!
            <button type="submit" id="register">Register</button>
        </div>
    </form>

</BODY>
</HTML>

