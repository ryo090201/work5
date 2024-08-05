<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
    <link rel="stylesheet" href="./CSS/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <?php include('./header.php'); ?>
    </header>
    <div class="app">
    <!-- Slider main container -->
    <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide"><img src="./kv/slide_1.jpg" alt="代替テキスト"></div>
    <div class="swiper-slide"><img src="./kv/slide_2.jpg" alt="代替テキスト"></div>
    <div class="swiper-slide"><img src="./kv/slide_3.jpg" alt="代替テキスト"></div>
    <div class="swiper-slide"><img src="./kv/slide_1.jpg" alt="代替テキスト"></div>
    <div class="swiper-slide"><img src="./kv/slide_2.jpg" alt="代替テキスト"></div>
    <div class="swiper-slide"><img src="./kv/slide_3.jpg" alt="代替テキスト"></div>
    </div>
    <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
    <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>
    </div>
    <div class="copy_box">
    <span class="copy">今年も始まる<span class="copy_red">夏祭り</span></span>
    </div>
    <div class="sch" id="schg">スケジュール</div>
    <div class="block"> 
        <p id="web" class="web">9月1日</p>
        <p class="seo">9月2日</p>
        <p class="apl">9月3日</p>
    </div>
    <div class="text">
        <div class="box">
            <p id="web_text" class="web_text">9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容</p>
            <p class="seo_text">9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容</p>
            <p class="apl_text">9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容</p>
        </div>
    </div>
    <div class="aaa">
    </div>
    <div class="sch" id="acss">アクセス</div>
    <div>
        <p class="loca">〒771-1154 徳島県徳島市応神町東貞方南川淵</p>
    </div>
    <div class="iframe">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6607.067008345164!2d134.51810744423508!3d34.10708917594946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1722753243616!5m2!1sja!2sjp" width="1050" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="sch" id="resv">席予約</div>

    <form class="Form" id="Form" action="./check.php" method="POST">
      <div class="Form-Item">
        <p class="Form-Item-Label">お名前<span class="Form-Item-Label-Required">※必須</span></p>
        <input type="text" name="name" class="Form-Item-Input" placeholder="例）田中 太郎" required>
      </div>
      <div class="Form-Item">
        <p class="Form-Item-Label">席の場所<span class="Form-Item-Label-Required">※必須</span></p>
            <select name="prefecture" id="prefecture" class="Form-Item-Input" required>
                <option value="" selected>---</option>
                <option value="SS席">SS席</option>
                <option value="S席">S席</option>
                <option value="A席">A席</option>
                <option value="B席">B席</option>
                <option value="C席">C席</option>
            </select>
      </div>
      <div class="Form-Item">
        <p class="Form-Item-Label">メールアドレス<span class="Form-Item-Label-Required">※必須</span></p>
        <input type="email" name="mail" class="Form-Item-Input" id="myInputm" placeholder="abcd1234@example.com" equired>
      </div>
      <div class="Form-Item">
        <p class="Form-Item-Label">電話番号<span class="Form-Item-Label-Required_b">※任意</span></p>
        <input type="tel" name="tel" class="Form-Item-Input" id="myInput" placeholder="例）09012345678">
      </div>
      <div id="errorMessage"></div>
      <div class="Form-Item" id="btn">
      <input type="submit" class="Form-Btn" id="btn1" value="送信" disabled="disabled">
      </div>
      </form>
      <footer>
        <?php include('./footer.php'); ?>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>