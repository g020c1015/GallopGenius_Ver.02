<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <!--レスポンシブ対応-->
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="./index.css">
    <title>Gallop Genius</title>
</head>
<body background="./imgFolder/keiba背景_ゴール直前.jpg">

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
    <div class="mainFrame">
        <div class="titleText">-Race Calender-</div>
        <!--G1.G2.G3の直近の予定-->
        <div class="boxArea-calender">
            <!--G1-->
            <div class="currentRace" id="g1">
                <div class="g1-race-glade">G1</div>
                <?PhP 
                //データベースに接続
                try{
                    $db = new PDO('mysql:dbname=race;host=localhost;charset=utf8','root','root');
                }catch(PDOException $e){
                    echo $e->getMessage();
                }
                $entry = $db->query('SELECT min(DATE_FORMAT(日付, "%D %W")) as 日付, レース名, 格 FROM race.racecalendar WHERE 格="G1" AND month(日付) = month(current_date()) AND date(日付) >= date(current_date());');
                ?>
                <?php while($resister = $entry->fetch()): ?>
                    <div class="race-name">
                        <?php print($resister["レース名"]) ?>
                    </div>
                    <div class="race-date">
                        <?php print($resister["日付"])?>
                    </div>
                <?php endwhile; ?>
            </div>
            <!--G2-->
            <div class="currentRace" id="g2">
                <div class="g2-race-glade">G2</div>
                <?PhP 
                //データベースに接続
                try{
                    $db = new PDO('mysql:dbname=race;host=localhost;charset=utf8','root','root');
                }catch(PDOException $e){
                    echo $e->getMessage();
                }
                $entry = $db->query('SELECT min(DATE_FORMAT(日付, "%D %W")) as 日付, レース名, 格 FROM race.racecalendar WHERE 格="G2" AND month(日付) = month(current_date()) AND date(日付) >= date(current_date());');
                ?>
                <?php while($resister = $entry->fetch()): ?>
                    <div class="race-name">
                        <?php print($resister["レース名"]) ?>
                    </div>
                    <div class="race-date">
                        <?php print($resister["日付"])?>
                    </div>
                <?php endwhile; ?>
            </div>
            <!--G3-->
            <div class="currentRace" id="g3">
                <div class="g1-race-glade">G3</div>
                <?PhP 
                //データベースに接続
                try{
                    $db = new PDO('mysql:dbname=race;host=localhost;charset=utf8','root','root');
                }catch(PDOException $e){
                    echo $e->getMessage();
                }
                $entry = $db->query('SELECT min(DATE_FORMAT(日付, "%D %W")) as 日付, レース名, 格 FROM race.racecalendar WHERE 格="G3" AND month(日付) = month(current_date()) AND date(日付) >= date(current_date());');
                ?>
                <?php while($resister = $entry->fetch()): ?>
                    <div class="race-name">
                        <?php print($resister["レース名"]) ?>
                    </div>
                    <div class="race-date">
                        <?php print($resister["日付"])?>
                    </div>
                <?php endwhile; ?>
            </div>
            <!--今月のレース一覧-->
            <div class="race-month">
            <?PhP 
                //データベースに接続
                try{
                    $db = new PDO('mysql:dbname=race;host=localhost;charset=utf8','root','root');
                }catch(PDOException $e){
                    echo $e->getMessage();
                }
                $entry = $db->query('SELECT DATE_FORMAT(日付, "%D %a") as 日付, レース名, 格 FROM race.racecalendar WHERE month(日付) = month(current_date());');
            ?>
            <?php while($resister = $entry->fetch()): ?>
                <div class="race-date-month">
                    <?php print($resister["格"])?><?php print($resister["レース名"]) ?><?php print($resister["日付"])?>
                </div>
            <?php endwhile; ?>
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
