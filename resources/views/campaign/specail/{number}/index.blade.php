<!DOCTYPE html>
<html>

<head>
  <!-- meta -->
  <title>{特集名}</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">

  <meta property="og:locale" content="ja_JP" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="SMoothJOB" />
  <meta property="og:description" content="" />
  <meta property="og:url" content="https://job.mar-cari.jp/" />
  <meta property="og:site_name" content="SMoothJOB" />
  <meta property="og:image" content="/img/mv.jpg" />

  <!-- CSS -->
  <link rel="stylesheet" href="../../../css/min/special-index.min.css">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>

<body>
  <!-- ここに内容を入れます -->

  <!-- container -->
  <div class="container">

    <!-- header -->
    <!-- headerが入ります -->
    <!-- [END] header -->

    <!-- searchHeader -->
    <!-- ここにsearch-app.htmlが入ります -->
    <!--[END] searchHeader -->

    <!-- searchbox.htmlが入ります -->

    <!-- if !login -->
    <ul class="servicelist">
      <li class="servicelist_service"><a class="servicelist_service_link" href="/lp/job/"><img class="servicelist_service-action" src="/img/" alt=""></a></li>
      <!-- if !checked -->
      <li class="servicelist_service"><a class="servicelist_service_link" href="https://check.mar-cari.jp/"><img class="servicelist_service-action" src="/img/" alt=""></a></li>
      <!-- endif -->
    </ul>
    <!-- else -->
      <!-- if !checked -->
      <div class="servicelist_service"><a class="servicelist_service_link" href="https://check.mar-cari.jp/"><img class="servicelist_service-action" src="/img/" alt=""></a></div>
      <!-- endif -->
    <!-- endif -->

    <!-- main -->
    <main>
      <div class="mainInner">

        <section class="cms-contents">
          <div class="contentsInner">
            <div class="special_banner">
              <img src="../../../img/" alt="" class="special_banner-action">
            </div>
            <ul class="special_pager">
              <li class="special_pager_item">
                <a href="{number+1}" class="special_pager_item-action">前の記事へ</a>
              </li>
              <li class="special_pager_item">
                <a href="{number-1}" class="special_pager_item-action">次の記事へ</a>
              </li>
            </ul>
            <div class="cms-head">
              <h2>{特集名}</h2>
            </div>
            <!-- campaign -->
            <!-- campaign-item.htmlが入ります -->
            <!-- [END] campaign -->
          </div>
        </section>

      </div>
    </main>
    <!--[END] main -->

    <!-- if !login -->
    <div class="forNotMember logout">
      <div class="inner">
        <div class="head"><span class="text">はじめての方へ</span></div>
        <div class="toMember"><a href="#">会員登録無料</a></div>
      </div>
    </div>
    <!-- endif -->

    <!-- footer -->
    <footer>
      <div class="footerOuter">
        <div class="footerInner">
          <div class="logo"><img src="" alt=""></div>
          <div class="sitemapblock">
            <div class="footerSitemap">
              <h4>記事</h4>
              <ul class="sitemapList">
                <li class="sitemapItem"><a href="article/new/index.html">新着記事</a></li>
                <li class="sitemapItem"><a href="article/category/index.html">カテゴリー別記事</a></li>
              </ul>
            </div>
            <div class="footerSitemap">
              <h4>特集</h4>
              <ul class="sitemapList">
                <li class="sitemapItem"><a href="article/hashimotos/index.html">潜入レポート</a></li>
                <li class="sitemapItem"><a href="article/m-interview/index.html">突撃！となりのマーケター</a></li>
              </ul>
            </div>
            <div class="footerSitemap">
              <h4>Contents List</h4>
              <ul class="sitemapList">
                <li class="sitemapItem"><a href="book/index.html">としょつく！</a></li>
                <li class="sitemapItem"><a href="election/index.html">マーケティング選挙</a></li>
                <li class="sitemapItem"><a href="https://mar-cari.jp/milclub/">マーケター＆勉強交流会</a></li>
                <li class="sitemapItem"><a href="ask/index.html">ディスカッションボード</a></li>
              </ul>
            </div>
            <div class="footerSitemap">
              <h4>Other List</h4>
              <ul class="sitemapList">
                <li class="sitemapItem"><a href="event/index.html">イベント</a></li>
                <li class="sitemapItem"><a href="dictionary/index.html">マーケ用語</a></li>
                <!-- <li class="sitemapItem"><a href="#">ライター紹介</a></li> -->
              </ul>
            </div>
            <div class="footerSitemap">
              <h4>Connect with us</h4>
              <ul class="sitemapList snsList">
                <li class="sitemapItem sns"><a href="https://twitter.com/mc_marcari"><img src="img/Twitter_Social_Icon_Rounded_Square_Color.png" width="" height="" alt=""></a></li>
                <li class="sitemapItem sns"><a href="https://www.facebook.com/mc.marcari/"><img src="img/flogo_RGB_HEX-72.png" width="" height="" alt=""></a></li>
                <li class="sitemapItem sns"><a href="https://www.instagram.com/marketingcareer/"><img src="img/glyph-logo_May2016.png" width="" height="" alt=""></a></li>
              </ul>
            </div>
          </div>
          <div class="othermapblock">
            <ul class="otherList">
              <!-- <li class="otherItem"><a href="#"><i class="fas fa-angle-right"></i>ご利用規約</a></li> -->
              <li class="otherItem"><a href="https://www.mmsouken.co.jp/privacy/"><i class="fas fa-angle-right"></i>プライバシーポリシー</a></li>
              <li class="otherItem"><a href="https://form.mmsouken.co.jp/contact.php"><i class="fas fa-angle-right"></i>お問い合わせ</a></li>
            </ul>
            <small class="copyright">Copyright(c) MM souken Co.,Ltd. All rights reserved</small>
            <a href="#top" class="logo"><img src="img/logo.svg" alt="marketing career"></a>
          </div>
        </div>
      </div>
    </footer>
    <!--[END] footer -->

  </div>
  <!-- [END] container -->

    <script type="text/javascript" src="js/min/index.min.js"></script>
    <script type="text/javascript" src="js/min/gnav.min.js"></script>
</body>

</html>
