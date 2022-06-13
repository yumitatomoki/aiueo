<?php
session_start();
if (!empty($_SESSION['token']) && $_POST['token'] === $_SESSION['token']) {
  
  // メールの言語設定
  mb_language("ja");
  mb_internal_encoding("UTF-8");

  // 件名を変数subjectに格納
  $subject = "［自動送信］メッセージ内容の確認";

  // メール本文を変数bodyに格納
  $body = <<< EOM
{$_SESSION['name']}　様

メッセージありがとうございます。
以下の内容でメッセージを承りました。

===================================================
< お名前 >
{$_SESSION['name']}

< 郵便番号 >
{$_SESSION['address']}

< メールアドレス >
{$_SESSION['email']}

< 電話番号 >
{$_SESSION['tel']}

<出張買い取りのご希望日>

< 第1希望日 >
{$_SESSION['date1']}

< 第2希望日 >
{$_SESSION['date2']}

< 第3希望日 >
{$_SESSION['date3']}

< ご依頼の品目内容 >
{$_SESSION['content']}
===================================================

※当メールは送信専用となっております。
　ご返信いただいても、お答えいたしかねますのでご了承ください。
EOM;

  // 送信元のメールアドレスを変数fromEmailに格納(本番環境へのデプロイ時に正規のアドレスに変更すること！)
  $fromEmail = "tomoki_yumita@trefac-t.tech";

  // 送信元の名前を変数fromNameに格納
  $fromName = "ゆみた";

  // ヘッダ情報を変数headerに格納する
  $header = "From: " . mb_encode_mimeheader($fromName) . "<{$fromEmail}>";

  // フォーム入力者へメールを送信する
  mb_send_mail($_SESSION['email'], $subject, $body, $header);

  // サイト管理者へメールを送信する
  mb_send_mail($fromEmail, $subject, $body, $header);
} else {
  // トークンが一致しない場合、コンタクトページにアクセス画面へ移動する
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
        <li class="breadcrumb_list_item">お申し込み・お問い合わせ(完了)</li>
      </ul>
    </div>
  </div>

  <main class="thanks_page mb120">
    <section class="thanks_main pb80">
      <div class="contact_container">
        <h2 class="heading">お申し込み・お問い合わせありがとうございました。</h2>
        <div class="mb80">
          <p>お問い合わせいただき、ありがとうございます。お申し込み・お問い合わせのメール送信が完了いたしました。</p>
          <br>
          <p>受付の確認メールが届きます。</p>
          <br>
          <p>しばらく経ってもメールが届かない場合は、入力頂いたメールアドレスが間違っているか、迷惑メールフォルダに振り分けられている可能性がございます。
            また、ドメイン指定をされている場合は、「support@pickup-japan.com」からのメールが受信できるようあらかじめ設定をお願いいたします。
            以上の内容をご確認の上、お手数ですがもう一度フォームよりお問い合わせ頂きますようお願い申し上げます。</p>
          <br>
          <p>なお、出張買取のご予定調整につきましては、メールまたはお電話にて担当者よりご連絡いたします。</p>
        </div>
        <a class="return_btn" href="https://www.pickup-japan.com/"><i class="return_arrow"></i>トップページへ戻る</a>
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
  <script src="../js/forbid_back.js"></script>

</body>

</html>
