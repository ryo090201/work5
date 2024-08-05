<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check</title>
    <link rel="stylesheet" href="./CSS/check.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
<body>
    <header>
        <?php include('./header.php'); ?>
    </header>

    <h2>お問い合わせ内容確認</h2>

    <form method="POST" action="thanks.php">

    <div class="all">
        <div class="qa_q">
            <p>お名前</p>
            <p>希望席</p>
            <p>メールアドレス</p>
            <p>電話番号</p>
        </div>
        <div class="qa_a">
            <div><?php echo $_POST['name']; ?><br></div>
            <div><?php echo $_POST['prefecture']; ?><br></div>
            <div><?php echo $_POST['mail']; ?><br></div>
            <div><?php echo $_POST['tel']; ?><br></div>
        </div>
    </div>
    <div class="btn_ch">
    <input  id ="back_btn" type="button" value="戻る" onClick="history.back()">
    <input  id ="submit_btn" type="submit" name="btn_submit" value="送信">
    </div>

    </form>
    
    <footer>
        <?php include('./footer.php'); ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./js/check.js"></script>
</body>
</html>