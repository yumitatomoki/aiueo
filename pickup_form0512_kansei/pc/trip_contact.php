<!DOCTYPE html>
<html lang="ja">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="Content-Script-Type" content="text/javascript">
  <meta http-equiv="Content-Style-Type" content="text/
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
        <form action="trip_confirm.php" class="validationForm" name="form" method="post">
          <div class="contactcontainer">
            <ul class="contact_list">
              <li class="contact_list_item">
                <div class="contact_list_contents">
                  <label class="contact_list_ttl" for="name">お名前 (カタカナ)<span class="require_label">必須</span></label>
                  <input class="required" type="text" name="name" id="name" placeholder="ヤマダタロウ">
                </div>
              </li>
              <li class="contact_list_item">
                <div class="contact_list_contents">
                  <label class="contact_list_ttl" for="address">郵便番号<span class="require_label">必須</span></label>
                  <input class="required address" type="text" name="address" id="address" placeholder="000-0000">
                </div>
              </li>
              <li class="contact_list_item">
                <div class="contact_list_contents">
                  <label class="contact_list_ttl" for="email">メールアドレス<span class="require_label">必須</span></label>
                  <input class="required email" type="email" name="email" id="email" placeholder="example@example.com">
                </div>
              </li>
              <li class="contact_list_item">
                <div class="contact_list_contents">
                  <label class="contact_list_ttl" for="tel">電話番号（日中繋がる電話番号）<span class="require_label">必須</span></label>
                  <input class="required tel" name="tel" id="tel" placeholder="00-0000-0000">
                </div>
              </li>
              <li class="contact_list_item">
                <p class="contact_list_ttl">出張買取のご希望日（第三希望まで）<span class="require_label">必須</span></p>
                <ul class="contact_list_flex">
                  <li>
                    <p class="contact_list_ttl">第1希望日</p><input class="required" type="date" name="date1" id="date1">
                  </li>
                  <li>
                    <p class="contact_list_ttl">第2希望日</p><input class="required" type="date" name="date2" id="date2">
                  </li>
                  <li>
                    <p class="contact_list_ttl">第3希望日</p><input class="required" type="date" name="date3" id="date3">
                  </li>
                </ul>
              </li>
              <li class="contact_list_item">
                  <label class="contact_list_ttl" for="content">ご依頼の品目内容<span class="require_label">必須</span></label>
                  <textarea class="required" name="content" id="content" rows="8" cols="80" placeholder="入力例：&#13;3ドア冷蔵庫 3年&#13;ドラム式洗濯機 5年&#13;液晶テレビ 50インチ TH-50JX750 2年&#13;ダイニングセット イス4脚 5年 ニトリ&#13;食器棚 3年 無印良品 高さ190×幅120&#13;チェスト 3年 無印良品 高さ120×幅90 等"></textarea>
              </li>
              <li class="contact_list_item privacy_list_item">
                <p class="contact_list_ttl">個人情報保護法</p>
                <p class="privacypolicy_text"><a class="privacypolicy_text_link" href="https://www.pickup-japan.com/privacy/site_privacy.html" target="_blank">「プライバシーポリシー」</a>にご同意のうえ「ご入力内容の確認」にお進みください。</p>
                <div class="privacypolicy_check_box">
                  <label class="privacypolicy_check">
                    <input class="required" id="privacypolicy" type="checkbox" name="privacypolicy agree">
                    <span>プライバシーポリシーに同意する</span>
                  </label>
                </div>
              </li>
            </ul>
            <button type="submit" class="def_btn" id="submit_btn" disabled>ご入力内容の確認</button>
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
  <script src="../js/validation.js"></script>
  <!-- 追加読み込み ここまで -->
</body>
</html>
