<?php
    echo 'Welcome ' . $_POST['salutation'] . $_POST['firstName'] . ' ' . $_POST['lastName'] .' to the easiest online shopping experience <br>' ;
    echo 'gender: ' . $_POST['gender'] . '<br>';
    echo 'gender: ' . $_POST['gender'] . '<br>';
    echo 'Height: ' . $_POST['height-ft'] . '\' ' . $_POST['height-inch'] . '" <br>';
?>

​<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .flex {
            /* basic styling */
            width: 1000px;
            height: 30px;
            border: 1px solid #555;
            font: 14px Arial;

            /* flexbox setup */
            display: flex;
            flex-direction: row;
        }

        .flex > div {
            flex: 1 1 auto;
            width: 30px; /* To make the transition work nicely. (Transitions to/from
                        "width:auto" are buggy in Gecko and Webkit, at least.
                        See http://bugzil.la/731886 for more info.) */
            transition: width 0.7s ease-out;
        }

        /* colors */
        .flex > div:nth-child(1){ background: #009246; }
        .flex > div:nth-child(2){ background: #F1F2F1; }
        .flex > div:nth-child(3){ background: #CE2B37; }


    </style>
</head>
<body>
<p>Flexbox nuovo</p>
<div class="flex">
    <div class="homeButton"> <form method="post" action="login.php"> <button type="submit" class="toolBarButton">Home</button> </form> </div>
    <div>
        <form method="post"> <button formaction="#newsfeed" class="toolBarButton">Newsfeed</button> </form>
        <form method="post"> <button formaction="#messages" class="toolBarButton">Messages</button> </form>
        <form method="post"> <button formaction="#contacts" class="toolBarButton">Contacts</button> </form>
    </div>
</div>
</body>
</html>

​<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font: 24px Helvetica;
            background: #999999;
        }

        #main {
            min-height: 800px;
            margin: 0;
            padding: 0;
            display: flex;
            flex-flow: row;
        }

        #main > article {
            margin: 4px;
            padding: 5px;
            border: 1px solid #cccc33;
            border-radius: 7pt;
            background: #dddd88;
            flex: 3 1 60%;
            order: 2;
        }

        #main > nav {
            margin: 4px;
            padding: 5px;
            border: 1px solid #8888bb;
            border-radius: 7pt;
            background: #ccccff;
            flex: 1 6 20%;
            order: 1;
        }

        #main > aside {
            margin: 4px;
            padding: 5px;
            border: 1px solid #8888bb;
            border-radius: 7pt;
            background: #ccccff;
            flex: 1 6 20%;
            order: 3;
        }

        header, footer {
            display: block;
            margin: 4px;
            padding: 5px;
            min-height: 100px;
            border: 1px solid #eebb55;
            border-radius: 7pt;
            background: #ffeebb;
        }

        /* Too narrow to support three columns */
        @media all and (max-width: 640px) {
            #main, #page {
                flex-direction: column;
            }

            #main > article, #main > nav, #main > aside {
                /* Return them to document order */
                order: 0;
            }

            #main > nav, #main > aside, header, footer {
                min-height: 50px;
                max-height: 50px;
            }
        }
    </style>
</head>
<body>
<header>header</header>
<div id='main'>
    <article>article</article>
    <nav>nav</nav>
    <aside>aside</aside>
</div>
<footer>footer</footer>
</body>
</html>

​<!DOCTYPE html>
<html lang="en">
<head>
    <style>    .vertical-box {
        display: flex;
        height: 400px;
        width: 400px;
        flex-flow: column;
    }
    .horizontal-box {
        display: flex;
        flex-flow: row;
    }
    .spacer {
        flex: auto;
        background-color: black;
    }
    .centered-element {
        flex: none;
        background-color: white;
    }

</style>
</head>

<body>
<div class="vertical-box">
    <div class="spacer"></div>
    <div class="centered-element horizontal-box">
        <div class="spacer"></div>
        <div class="centered-element">Centered content</div>
        <div class="spacer"></div>
    </div>
    <div class="spacer"></div>
</div>
</body>

​<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .vertical-box {
            display: flex;
            height: 400px;
            width: 400px;
            flex-flow: column;
        }
        .fixed-size {
            flex: none;
            height: 30px;
            background-color: black;
            text-align: center;
        }
        .flexible-size {
            flex: auto;
            background-color: white;
        }
    </style>
</head>

<body>
<div id="document" class="vertical-box">
    <div class="fixed-size"><button id="increase">Increase container size</button></div>
    <div id="flexible-content" class="flexible-size"></div>
    <div class="fixed-size"><button id="decrease">Decrease container size</button></div>
</div>
</body>

<script>
    var height = 400;
    document.getElementById('increase').onclick=function() {
        height += 10;
        if (height > 500) height = 500;
        document.getElementById('document').style.height = (height + "px");
    }

    document.getElementById('decrease').onclick=function() {
        height -= 10;
        if (height < 300) height = 300;
        document.getElementById('document').style.height = (height + "px");
    }
</script>

​<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .horizontal-container {
            display: flex;
            width: 300px;
            flex-flow: row wrap;
        }
        .fixed-size {
            flex: none;
            width: 100px;
            background-color: black;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>
<div id="container" class="horizontal-container">
    <div class="fixed-size">Element 1</div>
    <div class="fixed-size">Element 2</div>
    <div class="fixed-size">Element 3</div>
</div><button id="increase-size">Increase container size</button><button id="decrease-size">Decrease container size</button>
</body>

<script>
    var width = 300;

    document.getElementById('increase-size').onclick=function() {
        width += 100;
        if (width > 300) width = 300;
        document.getElementById('container').style.width = (width + "px");
    }

    document.getElementById('decrease-size').onclick=function() {
        width -= 100;
        if (width < 100) width = 100;
        document.getElementById('container').style.width = (width + "px");
    }
</script>
