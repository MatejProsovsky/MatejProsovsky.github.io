<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Title</title>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link href="mvc-master/App/Views/Home/css.css" rel="stylesheet">
    <script src="mvc-master/App/Views/Home/script.js"></script>
    <style>
        body {
            background-color: black;
            overflow-x: hidden;
        }
    </style>

</head>

<body onload="menuBar()" onresize="menuBar()">

<div class="menu">
    <div class="menu2">
    <div class="menu__overlay" >
        <a href="?c=home" class="menuText">
            <img src="mvc-master/App/Views/Img/menu.png" alt="Home"
                 style="width: 150px;height: 90px;top: 0px;position: absolute;display: block;">
            <div class="centeredH" style="top:90px;left: 10px">DOMOV</div>
        </a>
    </div>
    <div class="menu__overlay" >
        <a href="?c=home&a=cpu" class="menuText">
            <img src="mvc-master/App/Views/Img/menu.png" alt="stranka2"
                 style="width: 150px;height: 90px;top: 94px;position: absolute;display: block;">
            <div class="centeredH" style="top:185px;">CPU&MB</div>
        </a>
    </div>
    <div class="menu__overlay">
        <a href="?c=home&a=gpu" class="menuText">
            <img src="mvc-master/App/Views/Img/menu.png" alt="stranka3"
                 style="width: 150px;height: 90px;top: 188px;position: absolute;display: block;">
            <div class="centeredH" style="top:280px;left: 33px">GPU</div>
        </a>
    </div>
    <div class="menu__overlay">
        <a href="?c=home&a=mem" class="menuText">
            <img src="mvc-master/App/Views/Img/menu.png" alt="stranka4"
                 style="width: 150px;height: 90px;top: 282px;position: absolute;display: block;">
            <div class="centeredH" style="top:375px;">PAMÄTE</div>
        </a>
    </div>
    <div class="menu__overlay">
        <a href="?c=home&a=oth" class="menuText">
            <img src="mvc-master/App/Views/Img/menu.png" alt="stranka5"
                 style="width: 150px;height: 90px;top: 376px;position: absolute;display: block;">
            <div class="centeredH" style="top:480px;left: -3px">OSTATNÉ</div>
        </a>
    </div>

    <div class="menu__overlay">
        <a href="https://github.com/MatejProsovsky/MatejProsovsky.github.io" class="menuText">
            <img src="mvc-master/App/Views/Img/git.png" alt="git" style="position: absolute;top: 500px;left: 40px;width: 70px;display: block;">
        </a>
    </div>


    <img src="mvc-master/App/Views/Img/transp.png" alt="nice" style="left: 68vw;width: 30vw;position: absolute;top: 120px;color: cyan">
    <img src="mvc-master/App/Views/Img/transpR.png" alt="nice" style="left: 68vw;width: 30vw;position: absolute;top: 350px;color: cyan">
    <img src="mvc-master/App/Views/Img/transp.png" alt="nice" style="left: 68vw;width: 30vw;position: absolute;top: 650px;color: cyan">
    <img src="mvc-master/App/Views/Img/transpR.png" alt="nice" style="left: 68vw;width: 30vw;position: absolute;top: 1000px;color: cyan">
    <div class="menuline"></div>


        <?php
        if (isset($_SESSION['userId'])) {
            ?>
            <div class="logAndReg" style="top: 10px">
                <a href="?c=acc&a=pro">Profil</a>
            </div>

            <div class="logAndReg" style="top: 60px;font-size: 15px">
                <a href="?c=acc&a=logout">Odhlásiť</a>
            </div>
            <?php
        } else {
            ?>
            <div class="logAndReg" style="top: 10px">
                <a href="?c=acc&a=log">Prihlásenie</a>
            </div>

            <div class="logAndReg" style="top: 60px">
                <a href="?c=acc&a=add">Registrácia</a>
            </div>
            <?php
        }
        ?>

    </div>


</div>



<div class="popUpMenuButtom" >


    <div class="menu__overlay">
        <a onclick="popUpMenu()" onresize="menuBar()">
            <img src="mvc-master/App/Views/Img/menuButton.PNG" alt="HTML tutorial"
                 style="width: 45px;height:45px;top: 0px;position: absolute;">
        </a>
    </div>

    <?php
    if (isset($_SESSION['userId'])) {
        ?>
        <div class="logAndRegS" style="top: 10px">
            <a href="?c=acc&a=pro">Profil</a>
        </div>

        <div class="logAndRegS" style="top: 50px">
            <a href="?c=acc&a=logout">Odhlásenie</a>
        </div>
        <?php
    } else {
        ?>
        <div class="logAndRegS" style="top: 10px">
            <a href="?c=acc&a=log">Prihlásenie</a>
        </div>

        <div class="logAndRegS" style="top: 40px">
            <a href="?c=acc&a=add">Registrácia</a>
        </div>
        <?php
    }
    ?>


</div>



<div class="popUpMenu" >
    <div class="menu__overlay">
        <a href="?c=home" class="menuText">
            <img src="mvc-master/App/Views/Img/menu.png" alt="Home"
                 style="width: 220px;height: 140px;top: 40px; position: absolute;">
            <div class="centeredHM">DOMOV</div>
        </a>
    </div>
    <div class="menu__overlay">
        <a href="?c=home&a=cpu" class="menuText">
            <img src="mvc-master/App/Views/Img/menu.png" alt="stranka2"
                 style="width: 220px;height: 140px;top: 180px;position: absolute;">
            <div class="centeredCPUM">CPU&MB</div>
        </a>
    </div>
    <div class="menu__overlay">
        <a href="?c=home&a=gpu" class="menuText">
            <img src="mvc-master/App/Views/Img/menu.png" alt="stranka3"
                 style="width: 220px;height: 140px;top: 320px;position: absolute;">
            <div class=centeredGPUM>GPU</div>
        </a>
    </div>
    <div class="menu__overlay">
        <a href="?c=home&a=mem" class="menuText">
            <img src="mvc-master/App/Views/Img/menu.png" alt="stranka4"
                 style="width: 220px;height: 140px;top: 460px;position: absolute;">
            <div class="centeredRAMM">PAMÄTE</div>
        </a>
    </div>
    <div class="menu__overlay">
        <a href="?c=home&a=oth" class="menuText">
            <img src="mvc-master/App/Views/Img/menu.png" alt="stranka5"
                 style="width: 220px;height: 140px;top: 600px;position: absolute;">
            <div class="centeredOTHM">OSTATNÉ</div>
        </a>
    </div>
    <div class="menu__overlay">
        <a href="https://github.com/MatejProsovsky/MatejProsovsky.github.io" class="menuText">
            <img src="mvc-master/App/Views/Img/git.png" alt="git" style="position: absolute;top: 785px;width: 70px;left: 65px;">
        </a>
    </div>
</div>

<div class="web-content">
    <?= /** @var TYPE_NAME $contentHTML */
    $contentHTML ?>
</div>
</body>

</html>
