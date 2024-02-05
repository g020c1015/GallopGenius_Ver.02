<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <!--レスポンシブ対応-->
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="./index.css">
    <title>Gallop Genius</title>
</head>
<body background="./data/keiba背景4-2.jpg">
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
    <br/>
    <br/>
    <!--本文-->
    <!--ココから書き換えてください-->
    
    <div class="mainFrame">
        <div class="text_other">
            -Gallop Genius-
        </div>
        <div class="text_other2">
            <p>Gallop Geniusは初心者でも簡単に利用できる競馬予想AIです。</p>
            <p>ボックス/１頭軸などの複数点の買い方をおススメしております。</p>
        </div>
        <div class="text_other">
            -Manual-
        </div>
        <div class="text_other2">
            <div>
                ・Gallop Genius(AI予想)では予想結果として出てくる期待値をポイント(pt)で表示しております。
            </div>
            <p></p>
            <div>
                ・ポイント(pt)が高い馬番(番)を複数併せて馬券を購入することで安定した的中率を高額配当を狙うことが可能となっております。
            </div>
        </div>
        <div class="text_other">
            -Detail-
        </div>
        <div class="text_other2>
            <p>GallopGeniusの構成</p>
            <p>・機械学習 (Python/LightGBM)</p>
            <p>・webサイト (PHP/CSS/AWS/MySQL)</p>
        </div>
        <div class="text_other">
            -Member-
        </div>
        <div class="text_other2">
            <div class="member">
                <img src="./data/keiba_uma_character1.png" class="img_uma">
                Hirano_Shogo
            </div>
            <div class="member">
                <img src="./data/keiba_uma_character4.png" class="img_uma">
                Nagashima_Shun
            </div>
            <div class="member">
                <img src="./data/keiba_uma_character6.png" class="img_uma">
                Tachi_Yunosuke
            </div>
            <div class="member">
                <img src="./data/keiba_uma_character7.png" class="img_uma">
                Kikuchi_Yuto
            </div>
        </div>
    </div>
    </main>
    <!--footer-->
    <footer>
        <div class="footer-menu">
            <ul class="footer-menu-list">
                <li><img src="./data/keiba_jockey5_yellow.png"></li>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./AIP.php">Gallop Genius</a></li>
                <li><a href="./Others.php">Others</a></li>
                <li><img src="./data/keiba_jockey1_white.png"></li>
            </ul>
        </div>
    </footer>
</div>
</body>
</html>

