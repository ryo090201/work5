const swiper = new Swiper('.swiper', {
    // Optional parameters
    // direction: 'vertical',
    loop: true,
    spaceBetween: 10, //スライド感の余白
    slidesPerView: 1.2, //一度に表示するスライド枚数
    centeredSlides: true, //スライダーの最初と最後に余白を追加せずスライドが真ん中に配置される
    centeredSlidesBounds: true, //アクティブなスライドを中央に配置
    // If we need pagination
    pagination: {
     el: '.swiper-pagination',
     },

    // Navigation arrows
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
    // And if we need scrollbar
    // scrollbar: {
    // el: '.swiper-scrollbar',
    // },
    });
    
    // idの着脱
    $('.web').click(
      function () {
        $(this).attr('id', 'web');
        $('.seo').removeAttr('id');
        $('.apl').removeAttr('id');
        $('.web_text').attr('id', 'web_text');
        $('.seo_text').removeAttr('id');
        $('.apl_text').removeAttr('id');
      }
    );
    
    $('.seo').click(
      function () {
        $(this).attr('id', 'seo');
        $('.web').removeAttr('id');
        $('.apl').removeAttr('id');
        $('.seo_text').attr('id', 'seo_text');
        $('.web_text').removeAttr('id');
        $('.apl_text').removeAttr('id');
      }
    );
    
      $('.apl').click(
        function () {
          $(this).attr('id', 'apl');
          $('.web').removeAttr('id');
          $('.seo').removeAttr('id');
          $('.apl_text').attr('id', 'apl_text');
          $('.web_text').removeAttr('id');
          $('.seo_text').removeAttr('id');
        }
      );

      $('#Form').on('submit', function(event) {
        event.preventDefault();
        var input = $('#myInputm').val();
    
        // RFCに準拠（不要？）
        var regex = /\A[\w+\-.]+@[a-z\d\-.]+\.[a-z]+\z/i;
    
        if (regex.test(input)) {
            $('#errorMessage').text('');
            this.submit();
        } else {
            $('#errorMessage').text('有効なメールアドレスを入力してください。');
        }
    });

      $('#Form').on('submit', function(event) {
        event.preventDefault();
        var input = $('#myInput').val();
    
        // 日本の電話番号の正規表現 (固定電話、携帯、フリーダイヤル、IP電話を考慮)
        var regex = /^(0[5-9]0[-(]?[0-9]{4}[-)]?[0-9]{4}|0120[-]?\d{1,3}[-]?\d{4}|050[-]?\d{4}[-]?\d{4}|0[1-9][-]?\d{1,4}[-]?\d{1,4}[-]?\d{4})*$/;
    
        if (regex.test(input)) {
            $('#errorMessage').text('');
            this.submit();
        } else {
            $('#errorMessage').text('有効な電話番号を入力してください。');
        }
    });

    $(document).ready(function () {

        const $submitBtn = $('#btn1')
        $('#Form input,#Form select').on('change', function () {
          if (
            $('#Form input[type="text"]').val() !== "" &&
            $('#Form select').val() !== "" &&
            $('#Form input[type="email"]').val() !== "" === true
          ) {
            $submitBtn.prop('disabled', false);
      
          } else {
            $submitBtn.prop('disabled', true);
          }
        });   
      });