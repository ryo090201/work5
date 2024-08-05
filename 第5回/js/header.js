// 開閉ボタンをクリックすると発火
$("#sp_menuBtn").click(function() {
    // ラップ要素にactiveというクラスを付与する。
    $(".header_content").toggleClass("active");
    $("#sp_menuBtn").toggleClass("active");
  });
  
  $(".menu_link").click(function() {
    // ラップ要素にactiveというクラスを付与する。
    $(".header_content").toggleClass("active");
    $("#sp_menuBtn").toggleClass("active");
  });
  