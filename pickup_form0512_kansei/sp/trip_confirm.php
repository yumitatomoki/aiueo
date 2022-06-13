<?php
// セッション開始
session_start();

 // HTML出力前のエスケープ処理
  function escape($str)
  {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //フォームのボタンが押されたら、POSTされたデータを各変数に格納
  $_SESSION["name"] = escape($_POST["name"]);
  $_SESSION["address"] = escape($_POST["address"]);
  $_SESSION["email"] = escape($_POST["email"]);
  $_SESSION["tel"] = escape($_POST["tel"]);
  $_SESSION["datepicker01"] = escape($_POST["datepicker01"]);
  $_SESSION["datepicker02"] = escape($_POST["datepicker02"]);
  $_SESSION["datepicker03"] = escape($_POST["datepicker03"]);
  $_SESSION["content"] = escape($_POST["content"]);

  // トークンの生成（CSRF対策）
  $token = bin2hex(random_bytes(32));
  $_SESSION['token'] = $token;
} else {
  //フォームボタン以外からこのページにアクセスした場合（URL直接入力など）、トップページに戻る
  header(("location: trip_contact.php"));
  exit;
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Script-Type" content="text/javascript">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title>#</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="keywords" content="リサイクルショップ,リサイクル,買取,中古,ピックアップ,店舗情報,静岡,浜松,掛川,磐田,藤枝">
  <meta name="description" content="#">
  <meta name="robots" content="index,follow,noydir,noodp">
  <link rel="icon" href="https://www.pickup-japan.com/smartphone/favicon.ico">
  <link rel="icon" href="https://www.pickup-japan.com/smartphone/favicon.svg" type="image/svg+xml">
  <link rel="”apple-touch-icon”" sizes="”180×180″" href="”https://www.pickup-japan.com/smartphone/apple-touch-icon.png”">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&amp;display=swap">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <link rel="stylesheet" href="https://www.pickup-japan.com/smartphone/css/common.css">
  <link rel="stylesheet" href="https://www.pickup-japan.com/smartphone/css/top.css">
  <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link rel="stylesheet" href="https://www.pickup-japan.com/smartphone/css/about.css?20211006_2" type="text/css">

  <!-- 追加読み込み ここから-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/css/modaal.min.css">
  <link href="css/contact.css" type="text/css" rel="stylesheet" media="all">
  <!-- 追加読み込み ここまで -->

</head>

<body>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-91799891-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-91799891-1');
  </script>


  <header class="header" id="header">
    <div class="header_sub" id="header_sub">
      <h1 class="header_logo">
        <a href="https://www.pickup-japan.com/smartphone/" class="header_logo_btn">
          <img src="https://www.pickup-japan.com/smartphone/images/common/header/logo_pickup.png" alt="ピックアップジャパン" class="header_logo_img">
        </a>
      </h1>
      <nav class="header_sub_nav">
        <ul class="header_sub_nav_list">
          <li class="header_sub_nav_list_item is-online">
            <a href="https://store.shopping.yahoo.co.jp/pickupjapan/" target="_blank" rel="noopener" class="header_sub_nav_list_btn">
              <img src="https://www.pickup-japan.com/smartphone/images/common/header/icon_cart.png" alt="カート" class="header_sub_nav_list_img">
              <span class="header_sub_nav_list_txt">Y!ショッピング</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="header_main" id="header_main">
      <button class="header_main_menu" id="menu_btn"><span>メニュー</span></button>
      <nav class="header_main_nav">
        <ul class="header_main_nav_list">
          <li class="header_main_nav_list_item"><a href="https://www.pickup-japan.com/smartphone/shop/" class="header_main_nav_btn">店舗を探す</a></li>
          <li class="header_main_nav_list_item"><a href="https://www.pickup-japan.com/smartphone/sell/" class="header_main_nav_btn">モノを売る</a></li>
          <li class="header_main_nav_list_item"><a href="https://www.pickup-japan.com/smartphone/goods/" class="header_main_nav_btn">取り扱い商品</a></li>
          <li class="header_main_nav_list_item"><a href="https://www.pickup-japan.com/smartphone/shop/topics.html" class="header_main_nav_btn">新入荷ブログ</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="menu_wrap" id="menu_wrap">
    <div class="menu_cont">
      <ul class="menu_list">
        <li class="menu_list_item"><a href="https://www.pickup-japan.com/smartphone/shop/" class="menu_list_btn">店舗を探す</a></li>
        <li class="menu_list_item"><a href="https://www.pickup-japan.com/smartphone/sell/" class="menu_list_btn">モノを売る（買取）</a></li>
        <li class="menu_list_item"><a href="https://www.pickup-japan.com/smartphone/pawnbroker/" class="menu_list_btn">質預かり</a></li>
        <li class="menu_list_item"><a href="https://www.pickup-japan.com/smartphone/shop/topics.html" class="menu_list_btn">新入荷ブログ</a></li>
      </ul>
      <h2 class="menu_ttl">サービスガイド</h2>
      <ul class="menu_list">
        <li class="menu_list_item"><a href="https://www.pickup-japan.com/smartphone/service/memberscard.html" class="menu_list_btn">メンバーズカードのご案内</a></li>
        <li class="menu_list_item"><a href="https://www.pickup-japan.com/smartphone/service/track.html" class="menu_list_btn">トラック貸出し</a></li>
        <li class="menu_list_item"><a href="https://www.pickup-japan.com/smartphone/service/tax-free.html" class="menu_list_btn">TAX FREEについて</a></li>
      </ul>
      <ul class="menu_list">
        <li class="menu_list_item"><a href="https://www.pickup-japan.com/smartphone/company/" class="menu_list_btn">会社案内</a></li>
        <li class="menu_list_item"><a href="https://www.pickup-japan.com/smartphone/recruit/" class="menu_list_btn">採用情報</a></li>
        <li class="menu_list_item"><a href="https://www.pickup-japan.com/smartphone/privacy/site_privacy.html" class="menu_list_btn">プライバシーポリシー</a></li>
      </ul>
    </div>
    <div class="menu_close" id="menu_close"></div>
    <div class="menu_overlay" id="menu_overlay"></div>
  </div>


  <!-- コンテンツ ここから -->

  <div class="breadcrumb">
    <div class="container">
      <ul class="breadcrumb_list">
        <li><a href="https://www.pickup-japan.com/smartphone/">TOP</a></li>
        <li><a href="https://www.pickup-japan.com/smartphone/sell/">買取のご案内</a></li>
        <li><a href="#">出張買取</a></li>
        <li>お申し込み・お問い合わせ</li>
      </ul>
    </div>
  </div>

  <main class="contact_page b_m60">
    <section class="contact_main">
      <div class="container">
        <div class="pagehead">
          <h2 class="container">出張買取<br>お申し込み・お問い合わせ</h2>
        </div>
        <form action="trip_thanks.php" method="post">
        <input type="hidden" name="token" value="<?php echo escape($token); ?>">
          <ul class="contact_list inputconfirm_list">
            <li class="contact_list_item">
              <label for="name" class="contact_list_ttl">お名前 (カタカナ)</label>
              <input type="hidden" name="name" id="name" value="<?php echo $_SESSION["name"]; ?>" >
              <p><?php echo $_SESSION["name"]; ?></p>
            </li>
            <li class="contact_list_item">
              <label for="address" class="contact_list_ttl">郵便番号</label>
              <input type="hidden" name="address" value="<?php echo $_SESSION["address"]; ?>">
              <p><?php echo $_SESSION["address"]; ?></p>
            </li>
            <li class="contact_list_item">
              <label for="email" class="contact_list_ttl">メールアドレス</label>
              <input type="hidden" name="name" id="email" value="<?php echo $_SESSION["email"]; ?>">
              <p><?php echo $_SESSION["email"]; ?></p>
            </li>
            <li class="contact_list_item">
              <label for="tel" class="contact_list_ttl">電話番号</label>
              <input type="hidden" name="tel" id="tel" value="<?php echo $_SESSION["tel"]; ?>">
              <p><?php echo $_SESSION["tel"]; ?></p>
            </li>
            <li class="contact_list_item">
              <span class="contact_list_ttl">出張買取のご希望日</span>
              <ul class="contact_list_item_date">
                <li>
                  <label for="date1" class="contact_list_ttl">第1希望日</label>
                  <input type="hidden" name="date1" id="date1" value="<?php echo $_SESSION["datepicker01"]; ?>">
                  <p><?php echo $_SESSION["date1"]; ?></p>
                <li>
                  <label for="date2" class="contact_list_ttl">第2希望日</label>
                  <input type="hidden" name="date2" id="date2" value="<?php echo $_SESSION["datepicker02"]; ?>">
                  <p><?php echo $_SESSION["date2"]; ?></p>
                <li>
                  <label for="date3" class="contact_list_ttl">第3希望日</label>
                  <input type="hidden" name="date3" id="date3" value="<?php echo $_SESSION["datepicker03"]; ?>">
                  <p><?php echo $_SESSION["date3"]; ?></p>
                </li>
              </ul>
            </li>
            <li class="contact_list_item">
                <label for="content" class="contact_list_ttl">ご依頼の品目内容</label>
                <input type="hidden" name="content" id="content" value="<?php echo $_SESSION["content"]; ?>">
                <p><?php echo nl2br($_SESSION["content"]); ?></p>
            </li>
          </ul>
          <div class="confirm_btnarea">
            <button type="submit" name="submit" class="confirm_submit_btn def_btn">上記の内容で送信する</button>
            <button class="return_btn " type="button" onclick="history.back(-1)"><i class="return_arrow page_back"></i>お問い合わせフォームへ戻る</button>
          </div>
        </form>
      </div>
    </section>
  </main>

  <!-- コンテンツ ここまで -->

  <footer class="footer" id="footer">
    <div class="container">
      <div class="footer_main">
        <nav class="footer_groupsite">
          <h2 class="footer_groupsite_ttl">オンラインストア</h2>
          <ul class="footer_groupsite_list">
            <li class="footer_groupsite_list_item">
              <a href="https://auctions.yahoo.co.jp/seller/pickupjapan9967" target="_blank" rel="noopener" class="footer_groupsite_list_btn">
                <img src="https://www.pickup-japan.com/smartphone/images/common/footer/yahooauction.png" alt="ヤフオク" class="footer_groupsite_list_img footer_groupsite_list_img_smaller"></a>
            </li>
            <li class="footer_groupsite_list_item">
              <a href="https://store.shopping.yahoo.co.jp/pickupjapan/" target="_blank" rel="noopener" class="footer_groupsite_list_btn">
                <img src="https://www.pickup-japan.com/smartphone/images/common/footer/shopping.png" alt="ヤフーショッピング" class="footer_groupsite_list_img">
              </a>
            </li>
          </ul>
        </nav>
        <nav class="footer_groupsite">
          <h2 class="footer_groupsite_ttl">グループサイト</h2>
          <ul class="footer_groupsite_list">
            <li class="footer_groupsite_list_item">
              <a href="https://www.treasure-f.com/smartphone/" target="_blank" rel="noopener" class="footer_groupsite_list_btn">
                <img src="https://www.pickup-japan.com/smartphone/images/common/footer/trefac.png" alt="トレジャーファクトリー" class="footer_groupsite_list_img footer_groupsite_list_img_smaller">
              </a>
            </li>
            <li class="footer_groupsite_list_item">
              <a href="https://www.tf-style.com/" target="_blank" rel="noopener" class="footer_groupsite_list_btn">
                <img src="https://www.pickup-japan.com/smartphone/images/common/footer/trefacstyle.png" alt="トレファクスタイル" class="footer_groupsite_list_img"></a>
            </li>
            <li class="footer_groupsite_list_item">
              <a href="https://brandcollect.com/" target="_blank" rel="noopener" class="footer_groupsite_list_btn">
                <img src="https://www.pickup-japan.com/smartphone/images/common/footer/brandcollect.png" alt="ブランドコレクト" class="footer_groupsite_list_img footer_groupsite_list_img_smaller">
              </a>
            </li>
            <li class="footer_groupsite_list_item">
              <a href="https://www.tf-style.com/uselet/" target="_blank" rel="noopener" class="footer_groupsite_list_btn">
                <img src="https://www.pickup-japan.com/smartphone/images/common/footer/uselet.png" alt="ユーズレット" class="footer_groupsite_list_img footer_groupsite_list_img_smaller">
              </a>
            </li>
            <li class="footer_groupsite_list_item">
              <a href="https://sports.treasure-f.com/" target="_blank" rel="noopener" class="footer_groupsite_list_btn">
                <img src="https://www.pickup-japan.com/smartphone/images/common/footer/trefacsports.png" alt="トレファクスポーツ" class="footer_groupsite_list_img">
              </a>
            </li>
            <li class="footer_groupsite_list_item">
              <a href="https://www.treasure-f.com/smartphone/market/" target="_blank" rel="noopener" class="footer_groupsite_list_btn">
                <img src="https://www.pickup-japan.com/smartphone/images/common/footer/trefacmarket.png" alt="トレファクマーケット" class="footer_groupsite_list_img">
              </a>
            </li>
            <li class="footer_groupsite_list_item">
              <a href="https://www.tfhikkoshi.com/" target="_blank" rel="noopener" class="footer_groupsite_list_btn">
                <img src="https://www.pickup-japan.com/smartphone/images/common/footer/trefachikkoshi.png" alt="トレファク引越" class="footer_groupsite_list_img">
              </a>
            </li>
            <li class="footer_groupsite_list_item">
              <a href="https://www.cariru.jp/" target="_blank" rel="noopener" class="footer_groupsite_list_btn">
                <img src="https://www.pickup-japan.com/smartphone/images/common/footer/cariru.png" alt="カリル" class="footer_groupsite_list_img footer_groupsite_list_img_smaller">
              </a>
            </li>
            <li class="footer_groupsite_list_item">
              <a href="https://www.tf-fudosan.com/" target="_blank" rel="noopener" class="footer_groupsite_list_btn">
                <img src="https://www.pickup-japan.com/smartphone/images/common/footer/trefacfudosan.png" alt="トレファク不動産" class="footer_groupsite_list_img">
              </a>
            </li>
            <li class="footer_groupsite_list_item">
              <a href="https://www.golfkids.co.jp/" target="_blank" rel="noopener" class="footer_groupsite_list_btn">
                <img src="https://www.pickup-japan.com/smartphone/images/common/footer/golfkids.png" alt="ゴルフキッズ" class="footer_groupsite_list_img">
              </a>
            </li>
            <li class="footer_groupsite_list_item">
              <a href="https://www.kind.co.jp/" target="_blank" rel="noopener" class="footer_groupsite_list_btn">
                <img src="https://www.pickup-japan.com/smartphone/images/common/footer/kindal.png" alt="カインドオル" class="footer_groupsite_list_img footer_groupsite_list_img_smaller">
              </a>
            </li>
            <li class="footer_groupsite_list_item">
              <a href="https://www.pickup-japan.com/smartphone/" class="footer_groupsite_list_btn">
                <img src="https://www.pickup-japan.com/smartphone/images/common/footer/pickup.png" alt="ピックアップ" class="footer_groupsite_list_img">
              </a>
            </li>
          </ul>
        </nav>
        <nav class="footer_main_nav">
          <ul class="footer_main_nav_list">
            <li class="footer_main_nav_list_item">
              <a href="https://www.pickup-japan.com/smartphone/company/" class="footer_main_nav_list_btn">会社案内</a>
            </li>
            <li class="footer_main_nav_list_item">
              <a href="https://www.pickup-japan.com/smartphone/privacy/site_privacy.html" class="footer_main_nav_list_btn">プライバシーポリシー</a>
            </li>
          </ul>
        </nav>
        <p class="footer_note">古物商許可番号 491270002808</p>
      </div>
    </div>
    <p class="footer_copyright"><small>©2002-2020 Pick up all rights reserved.</small></p>
  </footer>


  <script type="text/javascript" src="https://www.pickup-japan.com/smartphone/js/jquery.cookie.js"></script>
  <script type="text/javascript" src="https://www.pickup-japan.com/smartphone/js/common.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <script type="text/javascript" src="https://www.pickup-japan.com/smartphone/js/top.js"></script>


  <!-- 追加読み込み ここから-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js"></script>

  <script>
    $(function() {
      $.datepicker._gotoToday = function(id) {
        var target = $(id);
        var inst = this._getInst(target[0]);
        var date = new Date();
        this._setDate(inst, date);
        this._hideDatepicker();
      };
      var showAdditionalButton = function(input) {
        setTimeout(function() {
          var buttonPanel = $(input)
            .datepicker("widget")
            .find(".ui-datepicker-buttonpane"),

            btn = $('<button class="ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all" type="button">クリア</button>');
          btn
            .unbind("click")
            .bind("click", function() {
              $.datepicker._clearDate(input);
            });

          btn.appendTo(buttonPanel);
        }, 1);
      };
      $('#datepicker01,#datepicker02,#datepicker03').datepicker({
        showButtonPanel: true,
        beforeShow: showAdditionalButton,
        onChangeMonthYear: showAdditionalButton,
        dateFormat: 'yy / mm / dd',
        monthNames: ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"],
      });

      // 日本語化
      $.datepicker.regional['ja'] = {
        closeText: '閉じる',
        prevText: '<前',
        nextText: '次>',
        currentText: '今日',
        monthNames: ['1月', '2月', '3月', '4月', '5月', '6月',
          '7月', '8月', '9月', '10月', '11月', '12月'
        ],
        monthNamesShort: ['1月', '2月', '3月', '4月', '5月', '6月',
          '7月', '8月', '9月', '10月', '11月', '12月'
        ],
        dayNames: ['日曜日', '月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日'],
        dayNamesShort: ['日', '月', '火', '水', '木', '金', '土'],
        dayNamesMin: ['日', '月', '火', '水', '木', '金', '土'],
        weekHeader: '週',
        dateFormat: 'yy/mm/dd',
        firstDay: 0,
        isRTL: false,
        showMonthAfterYear: true,
        yearSuffix: '年'
      };
      $.datepicker.setDefaults($.datepicker.regional['ja']);


      //モーダル表示
      $(".modal-open").modaal({
        // start_open:flag,ページロード時に表示するか
        overlay_close: false, //モーダル背景クリック時に閉じるか
        before_open: function() { // モーダルが開く前に行う動作
          $('html').css('overflow-y', 'hidden'); /*縦スクロールバーを出さない*/
        },
        after_close: function() { // モーダルが閉じた後に行う動作
          $('html').css('overflow-y', 'scroll'); /*縦スクロールバーを出す*/
        }
      });

    });
  </script>
  <!-- 追加読み込み ここまで -->


</body>

</html>
