<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <!--レスポンシブ対応-->
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" href="./index.css">
    <title>Gallop Genius</title>
</head>
<body background="./data/keiba背景_パドック.jpg">
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
                <li><a href="./HumanP.php">Nakanohito</a></li>
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
    <!--ココから書き換えてください-->
    <div class="mainFrame">
        <div class="titleText">
            <div class="nakanohito">
                <p>
                    <img src="./data/keiba_uma_character7.png" class="img_nakanohito">
                    kikuchi_Yutoの予想
                </p>

                <!--予想内容を掲載-->
                <div class="select_1">
                    <?php
                        try{
                            $db = new PDO('mysql:dbname=nakanohito;host=localhost;charset=utf8','root','root');
                        }catch(PDOException $e){
                            echo $e->getMessage();
                        }
                        $entry = $db->query("SELECT number_1, name_1 FROM nakanohito.nakanohito_table;")
                    ?>
                    <?php while($resister = $entry->fetch()):?>
                    <div>
                        ー上位３頭予想ー<br />
                        <p class="space"></p>
                        <?php print($resister["number_1"])?>
                        <?php print($resister["name_1"])?>
                    </div>
                    <?php endwhile;?>
                </div>
                <div class="select_2">
                <?php
                    try{
                        $db = new PDO('mysql:dbname=nakanohito;host=localhost;charset=utf8','root','root');
                    }catch(PDOException $e){
                        echo $e->getMessage();
                    }
                    $entry = $db->query("SELECT number_2, name_2 FROM nakanohito.nakanohito_table;")
                ?>
                    <?php while($resister = $entry->fetch()):?>
                    <div>
                        <?php print($resister["number_2"])?>
                        <?php print($resister["name_2"])?>
                    </div>
                    <?php endwhile;?>
                </div>
                <div class="select_2">
                <?php
                    try{
                        $db = new PDO('mysql:dbname=nakanohito;host=localhost;charset=utf8','root','root');
                    }catch(PDOException $e){
                        echo $e->getMessage();
                    }
                    $entry = $db->query("SELECT number_3, name_3 FROM nakanohito.nakanohito_table;")
                ?>
                    <?php while($resister = $entry->fetch()):?>
                    <div>
                        <?php print($resister["number_3"])?>
                        <?php print($resister["name_3"])?>
                        <br>
                        <br>
                    </div>
                    <?php endwhile;?>
                </div>
                <div class="reason">
                <?php
                    try{
                        $db = new PDO('mysql:dbname=nakanohito;host=localhost;charset=utf8','root','root');
                    }catch(PDOException $e){
                        echo $e->getMessage();
                    }
                    $entry = $db->query("SELECT reason FROM nakanohito.nakanohito_table;")
                ?>
                    <?php while($resister = $entry->fetch()):?>
                        ー予想理由ー<br />
                        <p class="space"></p>
                    <div class="reason">
                        <?php print($resister["reason"])?>
                    </div>
                    <?php endwhile;?>
                </div>
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
