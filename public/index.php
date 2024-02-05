<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <!--レスポンシブ対応-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0,viewport-fit=cover"/>
    <link rel="stylesheet" href="./index.css">
    <title>Gallop Genius</title>
</head>
<body background="./data/keiba背景_ゴール直前.jpg">

<div class="wrapper">
    <!--header-->
    <header>
        <div class="headerText">
            <a href="./index.php">
                Gallop Genius
            </a>
        </div>
        <div class="hamburger-menu">
            <input type="checkbox" id="menu-btn-check">
            <label for="menu-btn-check" class="menu-btn"><span></span></label>
        <!--menuの中身-->
        <div class="menu-content">
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./AIP.php">Gallop Genius</a></li>
                <li><a href="./HumanP.php">Human Prediction</a></li>
                <li><a href="./HorseList.php">Horse List</a></li>
                <li><a href="./AIP.php">AI Recovery Rate</a></li>
                <li><a href="./RaceCalendar.php">Race Calendar</a></li>
                <li><a href="./Others.php">Others</a></li>
            </ul>
        </div>
        </div>
    </header>
    <main>
    <!--本文-->
        <p class="space"></p>
        <p class="space"></p>
    <!--ボタン６つ配置-->
        <div class="boxArea">
            <div class="box-AIPrediction">
                <a href="./AIP.php">
                    Gallop Genius
                </a>
            </div>
            <div class="box-HumanPrediction">
                <a href="./HumanP.php">
                    Nakanohito
                </a>
            </div>
            <div class="box-HorseList">
                <a href="./HorseList.php">
                    Horse List
                </a>
            </div>
            <div class="box-RecoveryRate">
                <a href="./AIRR.php">
                    Recovery Rate
                </a>
            </div>
            <div class="box-RaceCalender">
                <a href="./RaceCalendar.php">
                    Race Calender
                </a>
            </div>
            <div class="box-Others">
                <a href="./Others.php">
                    Others
                </a>
            </div>
        </div>
    </main>
    <!--footer-->
    <footer>
        <div class="footer-menu">
            <ul class="footer-menu-list">
                <li><img class="index_img" src="./data/keiba_jockey5_yellow.png"></li>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./AIP.php">Gallop Genius</a></li>
                <li><a href="./Others.php">Others</a></li>
                <li><img class="index_img" src="./data/keiba_jockey1_white.png"></li>
            </ul>
        </div>
    </footer>
</div>
</body>
</html>
