<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>  
        <?php
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","root");
        $stmt= $pdo->query("select* from 4each_keijiban");

        ?>
    

        <header>
            <div class="logo">  
                <img src="4eachblog_logo.jpg">
            </div>
            <div class="menu">  
                <ul>    
                    <li>トップ</li>
                    <li>プロフィール</li>
                    <li>4eachについて</li>
                    <li>登録フォーム</li>
                    <li>問い合わせ</li>
                    <li>その他</li>
                </ul>
            </div>
        </header>
        <main>  
            <div class="left">  
                <h1>プログラミングに役立つ掲示板</h1>   
                <form method="post" action="insert.php">    
                    <h2>入力フォーム</h2>
                    <div>    
                        <label>ハンドルネーム</labe>
                        <br>
                        <input type="text" size="35" class="text" name="handlename">
                    </div>
                    <div> 
                        <label>タイトル</label>
                        <br>
                        <input type="text" size="35" class="text" name="title">
                    </div>
                    <div>
                        <label>コメント</label>
                        <br>
                        <textarea name="comments" cols="50" lows="30"></textarea>
                    </div>
                    <div>
                        <input type="submit" class="submit" value="投稿する">
                    </div>
                </form> 
                <?php 
                  
                 while($row=$stmt->fetch()){ 

                    echo"<div class='kiji'>";
                    echo"<h3>".$row['title']."</h3>";    
                    echo"<div class='contents'>";
                    echo $row['comments'];
                    echo"<div class='handlename'>posted by ".$row['handlename']."</div>";
                    echo"</div>";
                    echo"</div>";   
                  }

                ?>
            </div>
            <div class="right">
                <ul>
                    <h3>人気の記事</h3>   
                    <li>PHPオススメ本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>いま人気のエディタTop5</li>
                    <li>HTMLの基礎</li>
                </ul>
                <ul>    
                    <h3>オススメリンク</h3>     
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipsのダウンロード</li>
                    <li>Braketsのダウンロード</li>
                </ul>  
                <ul>    
                    <h3>カテゴリ</h3>    
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul>

            </div>

        </main>
        <footer>    
            copyright ©︎ internous | 4each blog the which provides A to Z about programming.
        </footer>

    </body>

</html>
