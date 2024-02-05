<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <!--レスポンシブ対応-->
    <meta name="viewport" content="width=device-width"/>
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
    <!--出馬数を取得-->
    <?php
        require_once __DIR__ . "/../config/database_config.php";

        define('DB_SCHEME', '出馬表');

        try{
            $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_SCHEME, DB_USER, DB_PASS);
        }catch(PDOException $e){
            $msg = "MySQL への接続に失敗しました。<br>(" . $e->getMessage() . ")";
            echo $msg;
            exit;
        }
        $entry = $db->query('SELECT count(*) FROM race.出馬表;');
    ?>
    <?php
        while($count = $entry->fetch()):
    ?>
    <?php endwhile?>
    <!--本文-->
    <!--ココから書き換えてください-->
    <div class="mainFrame">
        <div class="titleText">
            -Horse List-
        </div>
        <div>
        </div>
        <div id="horse_count" class="horse_list">
            <script type="text/javascript">
                //出馬表の列数を出馬数に合わせる
                const horse_count = document.getElementById('horse_count');
                horse_count.innerHTML = '<?php echo $count['count(*)'] ?>';
            </script>
                <?php
                    try{
                        $db = new PDO('mysql:dbname=race;host=localhost;charset=utf8','root','root');
                    }catch(PDOException $e){
                        echo $e->getMessage();
                    }
                    $entry = $db->query('SELECT * FROM race.出馬表;');
                ?>
                <?php while($resister = $entry->fetch()):?>
                <div class="horse_data">
                    <?php if($resister["枠"]=="1"){
                        echo'<font color="#000" style="background-color:#fff">&nbsp;1&nbsp;</font>';
                    }?>
                    <?php if($resister["枠"]=="2"){
                        echo'<font color="#fff" style="background-color:#000">&nbsp;2&nbsp;</font>';
                    }?>
                    <?php if($resister["枠"]=="3"){
                        echo'<font color="#fff" style="background-color:#f00">&nbsp;3&nbsp;</font>';
                    }?>
                    <?php if($resister["枠"]=="4"){
                        echo'<font color="#fff" style="background-color:#00f">&nbsp;4&nbsp;</font>';
                    }?>
                    <?php if($resister["枠"]=="5"){
                        echo'<font color="#fff" style="background-color:#ff0">&nbsp;5&nbsp;</font>';
                    }?>
                    <?php if($resister["枠"]=="6"){
                        echo'<font color="#fff" style="background-color:#0f0">&nbsp;6&nbsp;</font>';
                    }?>
                    <?php if($resister["枠"]=="7"){
                        echo'<font color="#fff" style="background-color:#ffa500">&nbsp;7&nbsp;</font>';
                    }?>
                    <?php if($resister["枠"]=="8"){
                        echo'<font color="#fff" style="background-color:#f3a0aa">&nbsp;8&nbsp;</font>';
                    }?>
                    <?php print($resister["馬番"])?>
                    <?php print($resister["馬名"])?>
                    <div class="jockey_name">
                        <?php print($resister["性齢"])?>
                        <?php print("　　　　　　")?>
                        <?php print($resister["騎手"])?>
                        <?php print($resister["斤量"])?>
                        <div>______________________</div>
                    </div>
                </div>
            <?php endwhile?>
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
