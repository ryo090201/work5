<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="./CSS/header.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="header_content">
                <a href="index.php">
                    <img src="../logo.png" width="100" alt="ヘッダー">
                </a>
                <div class="header_menu">
                    <ul class="menu_list">
                        <li class="menu_item">
                            <a class="menu_link" href="index.php#schg">スケジュール</a>
                        </li>
                        <li class="menu_item">
                            <a class="menu_link" href="index.php#acss">アクセス</a>
                        </li>
                        <li class="menu_item">
                            <a class="menu_link" href="index.php#resv">席予約</a>
                        </li>
                    </ul>
                </div>
            </div>
                <div class="header_menu-btn" id="sp_menuBtn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
        </header>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./js/header.js"></script>
</body>
</html>