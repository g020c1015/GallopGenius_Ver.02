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
    <!--ココから書き換えてください-->
    <div class="mainFrame">
        <div class="RCtext">-Race Calender-</div>
        <div id="raceDate"></div>
    </div>
    </main>
    <!--footer-->
    <footer>
        <div class="footer-menu">
            <ul class="footer-menu-list">
                <li><img src="./data/keiba_jockey5_yellow.png"></li>
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
<script>
    const output_svg = document.getElementById('raceDate');

function csv_data(dataPath) {
	const request = new XMLHttpRequest(); // HTTPでファイルを読み込む
	request.addEventListener('load', (event) => { // ロードさせ実行
		const response = event.target.responseText; // 受け取ったテキストを返す
		output_svg.innerHTML = response; // 表示
	});
	request.open('GET', dataPath, true); // csvのパスを指定
	request.send();
}
csv_data('race_date.csv');
</script>


</body>
</html>
