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
        <form action="trip_confirm.php" class="validationForm" name="form" method="post">
          <ul class="contact_list">
            <li class="contact_list_item">
              <label class="contact_list_ttl" for="name">お名前 (カタカナ)<span class="require_label">必須</span></label>
              <input class="required" type="text" name="name" id="name" placeholder="ヤマダタロウ">
            </li>
            <li class="contact_list_item">
              <label class="contact_list_ttl" for="address">郵便番号<span class="require_label">必須</span></label>
              <input class="required address" type="text" name="address" id="address" placeholder="000-0000">
            </li>
            <li class="contact_list_item">
              <label class="contact_list_ttl" for="email">メールアドレス<span class="require_label">必須</span></label>
              <input class="required email" type="email" name="email" id="email" placeholder="example@example.com">
            </li>
            <li class="contact_list_item">
              <label class="contact_list_ttl" for="tel">電話番号（日中繋がる電話番号）<span class="require_label">必須</span></label>
              <input class="required tel" name="tel" id="tel" placeholder="00-0000-0000">
            </li>
            <li class="contact_list_item">
              <label class="contact_list_ttl" class="contact_list_ttl">出張買取のご希望日（第三希望まで）<span class="require_label">必須</span></label>
              <ul class="contact_list_item_date">
                <li><label><span class="contact_list_ttl">第1希望日</span><input class="required" type="text" id="datepicker01" name="date1" placeholder="yyyy / mm / dd" readonly=”readonly”></label></li>
                <li><label><span class="contact_list_ttl">第2希望日</span><input class="required" type="text" id="datepicker02" name="date2" placeholder="yyyy / mm / dd" readonly=”readonly”></label></li>
                <li><label><span class="contact_list_ttl">第3希望日</span><input class="required" type="text" id="datepicker03" name="date3" placeholder="yyyy / mm / dd" readonly=”readonly”></label></li>
              </ul>
            </li>
            <li class="contact_list_item">
                <label class="contact_list_ttl" for="content">ご依頼の品目内容<span class="require_label">必須</span></label>
                <textarea class="required" name="content" id="content" rows="8" placeholder="入力例：&#13;3ドア冷蔵庫 3年&#13;ドラム式洗濯機 5年&#13;液晶テレビ 50インチ TH-50JX750 2年&#13;ダイニングセット イス4脚 5年 ニトリ&#13;食器棚 3年 無印良品 高さ190×幅120&#13;チェスト 3年 無印良品 高さ120×幅90 等"></textarea>
            </li>
            <li class="contact_list_item privacy_list_item">
              <span class="contact_list_ttl">個人情報保護方針</span>
              <p class="privacypolicy_text">
              <a class="privacypolicy_text_link" href="https://www.pickup-japan.com/privacy/site_privacy.html" target="_blank">「プライバシーポリシー」</a>にご同意のうえ<br>「ご入力内容の確認」にお進みください。
              </p>
              <div class="privacypolicy_check_box">
                <label class="privacypolicy_check">
                  <input class="required" type="checkbox" id="privacypolicy" name="privacypolicy agree"><span>個人情報保護方針に同意する</span>
                </label>
              </div>
            </li>
          </ul>
          <button type="submit" class="modal-open def_btn" id="submit_btn" disabled>ご入力内容の確認</button>
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
  <script src="../js/calnder.js"></script>
  <script src="../js/validation.js"></script>
  <!-- 追加読み込み ここまで -->


</body>

</html>
