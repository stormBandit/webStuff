<HTML xmlns="http://www.w3.org/1999/html">
    <HEAD>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </HEAD>

    <title>Welcome</title>

    <body>

        <nav class="headerNavBar">
            <form action="index.php" method="post">
                <button type="submit" formaction="/login.php" class="toolBarButton">Home</button>
                <button formaction="#newsfeed" class="toolBarButton">Newsfeed</button>
                <button formaction="#messages" class="toolBarButton">Messages</button>
                <button formaction="#contacts" class="toolBarButton">Contacts</button>
            </form>
        </nav>

        <section>
            <img src="images/img1.jpg" style="width:50%">
        </section>

        <section style="max-width:600px">
            <h2>THE BAND</h2>
            <p><i>We love music</i></p>
        </section>

        <section style="max-width:600px">
            <p>We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </section>

        <footer>
            <a href="#facebook"> <i> Facebook</i> </a>
            <a href="#twitter"> <i>Twitter</i> </a>
            <a href="#instagram"> <i>Instagram</i> </a>
            <p> <i> Powered by </i> <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a> </p>
        </footer>

        <form method="post" action="login.php">
            <button type="submit" class="mainButton">Sign In / Register</button>
        </form>
    </body>

</HTML>

