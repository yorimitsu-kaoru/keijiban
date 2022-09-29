<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>4eachblog BBS</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <img src="4eachblog_logo.jpg" class="logo">
    <header>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>

    <main>
        <div class="main-container">

            <div class="left">
                <div class="title_1">
                    <h1>プログラミングに役立つ掲示板</h1>
                </div>
                <div class="bbs">
                    <h2>入力フォーム</h2>
                    <form method="post" action="insert.php">
                        <div>
                            <label>ハンドルネーム</label><br>
                            <input type="text" size="35" name="handlename">
                        </div>
                        <br>
                        <div>
                            <label>タイトル</label><br>
                            <input type="text" size="35" name="title">
                        </div>
                        <br>
                        <div>
                            <label>コメント</label><br>
                            <textarea cols="70" rows="5" name="comments"></textarea>
                        </div>
                        <br>
                        <div>
                            <input type="submit" class="submit" value="投稿する">
                        </div>
                        <br>
                    </form>
                </div>

                <?php

                mb_internal_encoding("utf8");
                $pdo = new PDO("mysql:dbname=manabiya_sakura;host=localhost;", "root", "");
                $stmt = $pdo->query("select * from 4each_bbs");

                while ($row = $stmt->fetch()) {

                    echo "<div class='bbs_article'>";
                    echo "<h3>" . $row['title'] . "</h3>";
                    echo "<div class='contents'>";
                    echo $row['comments'];
                    echo "<div class='handlename'>posted by " . $row['handlename'] . "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>

            </div>

            <div class="right">
                <div class="title_2">
                    <h2>人気の記事</h2>
                </div>
                <ul class="linklist">
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>今人気のエディタ Top5</li>
                    <li>HTMLの基礎</li>
                </ul>
                <div class="title_2">
                    <h2>オススメリンク</h2>
                </div>
                <ul class="linklist">
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>
                <div class="title_2">
                    <h2>カテゴリ</h2>
                </div>
                <ul class="linklist">
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>
            </div>

        </div>
    </main>

    <footer>
        copyright © internous | 4each blog the which provides A to Z about programming.
    </footer>

</body>

</html>