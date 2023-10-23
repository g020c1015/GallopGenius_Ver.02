<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <!--レスポンシブ対応-->
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="./index.css">
    <title>Gallop Genius</title>
</head>
<body>
<div class="wrapper">
    <!--header-->
    <header>
    <div class="headerText">
        Gallop Genius
    </div>
        <div class="hamburger-menu">
            <input type="checkbox" id="menu-btn-check">
            <label for="menu-btn-check" class="menu-btn"><span></span></label>
        <!--menuの中身-->
        <div class="menu-content">
            <ul>
                <li><a href="./AIP.php">AI Prediction</a></li>
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
    <!--ボタン６つ配置-->
        <div class="boxArea">
            <div class="box-AIPrediction"><div class="box-text">AI Prediction</div>
                <img src="./imgFolder/AIイメージ.png" class="imgBtn">
            </div>
            <div class="box-HumanPrediction"><div class="box-text">Human Prediction</div>
                <img src="./imgFolder/keiba_kansen.png" class="imgBtn">
            </div>
            <div class="box-HorseList"><div class="box-text">Horse List</div>
                <img src="./imgFolder/3連複.png" class="imgBtn">
            </div>
            <div class="box-RecoveryRate"><div class="box-text">Recovery Rate</div>
                <img src="./imgFolder/keiba_baken.png" class="imgBtn">
            </div>
            <div class="box-RaceCalender"><div class="box-text">Race Calender</div>
                <img src="./imgFolder/カレンダー.png" class="imgBtn">
            </div>
            <div class="box-Others"><div class="box-text">Others</div>
                <img src="./imgFolder/keiba_kansen.png" class="imgBtn">
            </div>
        </div>
    </main>
    <!--footer-->
    <footer>
        <div class="footer-menu">
            <ul class="footer-menu-list">
                <li><img src="./imgFolder/keiba_jockey5_yellow.png"></li>
                <li>Home</li>
                <li>Others</li>
                <li>Others</li>
                <li>Others</li>
                <li>Home</li>
                <li><img src="./imgFolder/keiba_jockey1_white.png"></li>
            </ul>
        </div>
    </footer>
</div>
</body>
</html>
