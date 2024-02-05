<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <!--レスポンシブ対応-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover"/>
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
    <br/>
    <br/>
    <div class="mainFrame">
        <div class="titleText">
            Gallop Genius予想
        </div>
        <?php
        require_once __DIR__ . "/../config/database_config.php";

        define('DB_SCHEME', 'race');

        try{
            $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_SCHEME, DB_USER, DB_PASS);
        }catch(PDOException $e){
            $msg = "MySQL への接続に失敗しました。<br>(" . $e->getMessage() . ")";
            echo $msg;
            exit;
        }
            $entry =$db->query('SELECT 馬番,ROUND(score,3)*1000 as score 
                                FROM 20240128_silkroads
                                WHERE レースid LIKE "%12"
                                AND score >= 0;');
        ?>
        <?php while($resister = $entry->fetch()): ?>
        <!--馬番　スコアを表示-->
        <div class="AI_yosou_num">
            <?php print($resister["馬番"])?><?php print("番")?>
            <?php print(" ")?>
            <?php print($resister["score"])?><?php print("pt")?>
        </div>
        <?php endwhile; ?>
    </div>
    </main>
    <!--footer-->
    <footer>
        <div class="footer-menu">
            <ul class="footer-menu-list">
                <li><img class="footer_img" src="./data/keiba_jockey5_yellow.png"></li>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./AIP.php">Gallop Genius</a></li>
                <li><a href="./Others.php">Others</a></li>
                <li><img class="footer_img" src="./data/keiba_jockey1_white.png"></li>
            </ul>
        </div>
    </footer>
</div>
</body>
</html>
