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
  $_SESSION["date1"] = escape($_POST["date1"]);
  $_SESSION["date2"] = escape($_POST["date2"]);
  $_SESSION["date3"] = escape($_POST["date3"]);
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
  <meta name="keywords" content="ピックアップ,PickUP,pickup,リサイクルショップ,リユースショップ,リサイクル,買取,中古,不用品,静岡,浜松,掛川,磐田,藤枝,トレファクグループ">
  <meta name="description" content="#">
  <meta name="robots" content="index,follow,noydir,noodp">
  <meta name="viewport" content="width=1200">
  <meta name="format-detection" content="telephone=no">
  <link rel="icon" href="https://www.pickup-japan.com/favicon.ico">
  <link rel="icon" href="https://www.pickup-japan.com/favicon.svg" type="image/svg+xml">
  <link rel="stylesheet" href="https://www.pickup-japan.com/css/destyle.css">
  <link rel="stylesheet" href="https://www.pickup-japan.com/css/common.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  <!-- 追加読み込み ここから-->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/css/modaal.min.css">
  <link href="css/contact.css" type="text/css" rel="stylesheet" media="all">
  <!-- 追加読み込み ここまで -->

  <meta name="robots" content="noodp">
  <meta name="robots" content="noydir">
</head>

<body>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91799891-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-91799891-1');
  </script>


  <header>
    <div class="header">
      <div class="header_inner container">
        <h1><a href="https://www.pickup-japan.com/"><img src="https://www.pickup-japan.com/images/common/header_logo.png" alt="リサイクルショップ「ピックアップ」"></a></h1>
        <nav>
          <ul class="header_nav">
            <li><a href="https://www.pickup-japan.com/shop/">店舗を探す</a></li>
            <li><a href="https://www.pickup-japan.com/sell/">モノを売る</a></li>
            <li><a href="https://www.pickup-japan.com/goods/">取り扱い商品</a></li>
            <li><a href="https://www.pickup-japan.com/shop/topics.html">新入荷ブログ</a></li>
          </ul>
          <ul class="header_btn">
            <li class="header_btn_online"><a href="https://store.shopping.yahoo.co.jp/pickupjapan/" target="_blank" rel="noopener">Y!ショッピング</a></li>
            <li class="header_btn_hamburger">
              <button class="header_main_menu" id="menu_btn"><span></span>メニュー</button>
              <div class="menu_wrap" id="menu_wrap">
                <div class="menu_cont">
                  <ul class="menu_list">
                    <li class="menu_list_item"><a href="https://www.pickup-japan.com/shop/" class="menu_list_btn">店舗を探す</a></li>
                    <li class="menu_list_item"><a href="https://www.pickup-japan.com/sell/" class="menu_list_btn">モノを売る（買取）</a></li>
                    <li class="menu_list_item"><a href="https://www.pickup-japan.com/pawnbroker/" class="menu_list_btn">質預かり</a></li>
                    <li class="menu_list_item"><a href="https://www.pickup-japan.com/shop/topics.html" class="menu_list_btn">新入荷ブログ</a></li>
                  </ul>
                  <h2 class="menu_ttl">サービスガイド</h2>
                  <ul class="menu_list">
                    <li class="menu_list_item"><a href="https://www.pickup-japan.com/service/memberscard.html" class="menu_list_btn">メンバーズカードのご案内</a></li>
                    <li class="menu_list_item"><a href="https://www.pickup-japan.com/service/track.html" class="menu_list_btn">トラック貸出し</a></li>
                    <li class="menu_list_item"><a href="https://www.pickup-japan.com/service/tax-free.html" class="menu_list_btn">TAX FREEについて</a></li>
                  </ul>
                  <ul class="menu_list">
                    <li class="menu_list_item"><a href="https://www.pickup-japan.com/company/" class="menu_list_btn">会社案内</a></li>
                    <li class="menu_list_item"><a href="https://www.pickup-japan.com/recruit/" class="menu_list_btn">採用情報</a></li>
                    <li class="menu_list_item"><a href="https://www.pickup-japan.com/privacy/site_privacy.html" class="menu_list_btn">プライバシーポリシー</a></li>
                  </ul>
                </div>
                <div class="menu_close" id="menu_close"></div>
                <div class="menu_overlay" id="menu_overlay"></div>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <!-- コンテンツ ここから -->

  <div class="breadcrumb">
    <div class="container">
      <ul class="breadcrumb_list">
        <li class="breadcrumb_list_item"><a href="https://www.pickup-japan.com/">TOP</a></li>
        <li class="breadcrumb_list_item"><a href="https://www.pickup-japan.com/sell/">買取のご案内</a></li>
        <li class="breadcrumb_list_item"><a href="#">出張買取</a></li>
        <li class="breadcrumb_list_item">お申し込み・お問い合わせ</li>
      </ul>
    </div>
  </div>

  <main class="contact_page mb120">
    <section class="contact_main pb80">
      <div class="contact_container">
        <div class="pagehead">
          <h2 class="heading">出張買取<br>お申し込み・お問い合わせ</h2>
        </div>
        <form action="./trip_thanks.php" method="post">
        <input type="hidden" name="token" value="<?php echo escape($token); ?>">
          <ul class="inputconfirm_list confirm-content-container">
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
            <p class="contact_list_head">出張買取のご希望日</p>
            <li class="contact_list_item">
              <label for="date1" class="contact_list_ttl">第1希望</label>
              <input type="hidden" name="date1" id="date1" value="<?php echo $_SESSION["date1"]; ?>">
              <p><?php echo $_SESSION["date1"]; ?></p>
            </li>
            <li class="contact_list_item">
              <label for="date2" class="contact_list_ttl">第2希望</label>
              <input type="hidden" name="date2" id="date2" value="<?php echo $_SESSION["date2"]; ?>">
              <p><?php echo $_SESSION["date2"]; ?></p>
            </li>
            <li class="contact_list_item">
              <label for="date3" class="contact_list_ttl">第3希望</label>
              <input type="hidden" name="date3" id="date3" value="<?php echo $_SESSION["date3"]; ?>">
              <p><?php echo $_SESSION["date3"]; ?></p>
            </li>
            <li class="contact_list_item">
              <label for="content" class="contact_list_ttl">ご依頼の品目内容</label>
              <input type="hidden" name="content" id="content" value="<?php echo $_SESSION["content"]; ?>">
              <p><?php echo nl2br($_SESSION["content"]); ?></p>
            </li>
          </ul>
          <div class="confirm_btnarea">
            <button class="return_btn" type="button" onclick="history.back(-1)"><i class="return_arrow"></i>お問い合わせフォームへ戻る</button>
            <button type="submit" name="submit" class="confirm_submit_btn">上記の内容で送信する</button>
          </div>
        </form>
      </div>
    </section>
  </main>

  <!-- コンテンツ ここまで -->

  <footer>
    <div class="footer_inner container">
      <div class="footer_main">
        <div class="footer_left_box">
          <p class="footer_logo"><a href="https://www.pickup-japan.com/"><img src="https://www.pickup-japan.com/images/common/footer/footer_logo.png" alt="ピックアップ"></a></p>
          <p class="footer_description">総合リサイクルショップピックアップでは、金・プラチナ・ブランド品・時計・衣類・家電製品・パソコン・子供用品・サーフボード・自転車・スマートフォン・タブレット・電動工具・フィギュア・ゲーム・おもちゃ・その他いろいろな商品を取り扱ってます！！</p>
          <div class="footer_nav">
            <ul>
              <li><a href="https://www.pickup-japan.com/company/">会社案内</a></li>
              <li><a href="https://www.pickup-japan.com/privacy/site_privacy.html">プライバシーポリシー</a></li>
            </ul>
            <p>古物商許可番号 491270002808</p>
          </div>
        </div>
        <div class="footer_right_box">
          <div class="site_area online_store">
            <div>
              <p class="footer_groupsite_ttl">オンラインストア</p>
              <ul class="online_area">
                <li><a href="https://auctions.yahoo.co.jp/seller/pickupjapan9967" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/yahooauction.png" alt="ヤフオク"></a></li>
                <li><a href="https://store.shopping.yahoo.co.jp/pickupjapan/" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/shopping.png" alt="ヤフーショッピング"></a></li>
              </ul>
            </div>
          </div>
          <div class="site_area">
            <p class="footer_groupsite_ttl">グループサイト</p>
            <ul class="group_area">
              <li><a href="https://www.treasure-f.com/" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/group_tf.png" alt="トレファク"></a></li>
              <li><a href="https://www.tf-style.com/" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/group_style.png" alt="トレファクスタイル"></a></li>
              <li><a href="https://brandcollect.com/" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/group_brandcollect.png" alt="ブランドコレクト"></a></li>
              <li><a href="https://www.tf-style.com/uselet/" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/group_uselet.png" alt="ユーズレット"></a></li>
              <li><a href="https://sports.treasure-f.com/" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/group_sports.png" alt="トレファクスポーツ"></a></li>
              <li><a href="https://www.treasure-f.com/market/" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/group_market.png" alt="トレファクマーケット"></a></li>
              <li><a href="https://www.tfhikkoshi.com/" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/group_hikkoshi.png" alt="トレファク引越"></a></li>
              <li><a href="https://www.cariru.jp/" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/group_cariru.png" alt="カリル"></a></li>
              <li><a href="https://www.tf-fudosan.com/" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/group_fudosan.png" alt="トレファク不動産"></a></li>
              <li><a href="https://www.golfkids.co.jp/" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/group_golfkids.png" alt="ゴルフキッズ"></a></li>
              <li><a href="https://www.kind.co.jp/" target="_blank" rel="noopener"><img src="https://www.pickup-japan.com/images/common/footer/group_kindal.png" alt="カインドオル"></a></li>
              <li><a href="https://www.pickup-japan.com/"><img src="https://www.pickup-japan.com/images/common/footer/group_pickup.png" alt="ピックアップ"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <p class="copyright">&copy;2002-2020 Pick up all rights reserved.</p>
  </footer>
  <script type="text/javascript" src="https://www.pickup-japan.com/js/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.4/ofi.min.js"></script>
  <script src="https://www.pickup-japan.com/js/ofi.js"></script>
  <!-- 追加読み込み ここから -->
  <!-- 追加読み込み ここまで -->
</body>
</html>
