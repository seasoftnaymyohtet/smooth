<!DOCTYPE html>
<html>

<head>

  <title>検索結果一覧</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">

  <meta property="og:locale" content="ja_JP" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="SMoothJOB" />
  <meta property="og:description" content="" />
  <meta property="og:url" content="https://job.mar-cari.jp/" />
  <meta property="og:site_name" content="SMoothJOB" />
  <meta property="og:image" content="../img/common/mv.jpg" />


  <!-- CSS -->
  <link rel="stylesheet" href="../css/min/search.min.css">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

</head>

<body>
  <!-- ここに内容を入れます -->

  <!-- container -->
  <div class="container">

    <!-- header -->
    <!-- ここにheaderが入ります -->
    <!-- [END] header -->

    <!-- searchHeader -->
    <!-- ここにsearch-app.htmlが入ります -->
    <!--[END] searchHeader -->

    <!-- nav#navBox logout -->
    <nav class="navBox logout">
      <div class="navInner">
        <ul class="navLists">
          <li class="navList">
            <a class="nolink" href="#">記事</a>
            <ul class="itemList">
              <li class="item"><a href="article/new/index.html">新着記事</a></li>
              <li class="item"><a href="article/category/index.html">カテゴリー別記事</a></li>
            </ul>
          </li>
          <li class="navList">
            <a class="nolink" href="#">特集</a>
            <ul class="itemList">
              <li class="item"><a href="article/hashimotos/index.html">潜入レポート</a></li>
              <li class="item"><a href="article/m-interview/index.html">突撃！となりのマーケター</a></li>
            </ul>
          </li>
          <li class="navList"><a href="book/index.html">としょつく！</a></li>
          <li class="navList"><a href="election/index.html">マーケティング選挙</a></li>
          <li class="navList"><a href="https://mar-cari.jp/milclub/">マーケター＆勉強交流会</a></li>
          <li class="navList"><a href="ask/index.html">ディスカッションボード</a></li>
        </ul>
        <ul class="headerbtn">
          <li class="logInOut"><a href="login/index.html">ログイン</a></li>
          <li class="registbtn"><a href="users/signup/index.html">無料会員登録</a></li>
        </ul>
      </div>
    </nav>
    <!--[END] nav#navBox logout -->

    <!-- nav#navBox login-->
    <nav class="navBox login">
      <div class="navInner">
        <ul class="navLists">
          <li class="navList">
            <a class="nolink" href="#">記事</a>
            <ul class="itemList">
              <li class="item"><a href="article/new/index.html">新着記事</a></li>
              <li class="item"><a href="article/category/index.html">カテゴリー別記事</a></li>
            </ul>
          </li>
          <li class="navList">
            <a class="nolink" href="#">特集</a>
            <ul class="itemList">
              <li class="item"><a href="article/hashimotos/index.html">潜入レポート</a></li>
              <li class="item"><a href="article/m-interview/index.html">突撃！となりのマーケター</a></li>
            </ul>
          </li>
          <li class="navList"><a href="book/index.html">としょつく！</a></li>
          <li class="navList"><a href="election/index.html">マーケティング選挙</a></li>
          <li class="navList"><a href="https://mar-cari.jp/milclub/">マーケター＆勉強交流会</a></li>
          <li class="navList"><a href="ask/index.html">ディスカッションボード</a></li>
        </ul>
      </div>
    </nav>
    <!--[END] nav#navBox -->

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

    <div class="searched">
      <div class="searched_head"><span class="searched_head-text">■現在の検索条件</span></div>
      <ul class="searched_list">
        <li class="searched_list_item">
          <div class="searched_list_item-name">職種</div>
          <div class="searched_list_item_area">
            <span class="searched_list_item_area_selected">マーケティング</span>
            <span class="searched_list_item_area_selected">プロダクトマネージャー</span>
            <span class="searched_list_item_area_selected">KPIデザイナー</span>
          </div>
        </li>
        <li class="searched_list_item">
          <div class="searched_list_item-name">勤務地</div>
          <div class="searched_list_item_area">
            <span class="searched_list_item_area_selected">東京</span>
            <span class="searched_list_item_area_selected">大阪</span>
            <span class="searched_list_item_area_selected">海外</span>
          </div>
        </li>
        <li class="searched_list_item">
          <div class="searched_list_item-name">年収</div>
          <div class="searched_list_item_area">
            <span class="searched_list_item_area_selected">501～700万円</span>
          </div>
        </li>
        <li class="searched_list_item">
          <div class="searched_list_item-name">マーケティングキャリア</div>
          <div class="searched_list_item_area">
            <span class="searched_list_item_area_selected">3年～5年未満</span>
          </div>
        </li>
        <li class="searched_list_item">
          <div class="searched_list_item-name">設立</div>
          <div class="searched_list_item_area">
            <span class="searched_list_item_area_selected">6年～10年未満</span>
          </div>
        </li>
        <li class="searched_list_item">
          <div class="searched_list_item-name">従業員数</div>
          <div class="searched_list_item_area">
            <span class="searched_list_item_area_selected">51名～100名</span>
          </div>
        </li>
      </ul>
      <div class="cms_btn"><span class="cms_btn-action">検索条件を見直す</span></div>
    </div>

    <!-- main -->
    <main>
      <div class="mainInner">

        <section class="cms-contents">
          <div class="contentsInner">
            <div class="cms-head">
              <h2>Search list<span>検索結果一覧</span></h2>
            </div>
            <!-- campaign-item.htmlが入ります -->
          </div>
        </section>

      </div>
    </main>
    <!--[END] main -->

    <div class="forNotMember">
      <div class="inner">
        <div class="head"><span class="text">はじめての方へ</span></div>
        <div class="toMember"><a href="#">会員登録無料</a></div>
      </div>
    </div>

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
                <li class="sitemapItem sns"><a href="https://twitter.com/mc_marcari"><img src="../assets/img/common/Twitter_Social_Icon_Rounded_Square_Color.png" width="" height="" alt=""></a></li>
                <li class="sitemapItem sns"><a href="https://www.facebook.com/mc.marcari/"><img src="../assets/img/common/flogo_RGB_HEX-72.png" width="" height="" alt=""></a></li>
                <li class="sitemapItem sns"><a href="https://www.instagram.com/marketingcareer/"><img src="../assets/img/common/glyph-logo_May2016.png" width="" height="" alt=""></a></li>
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
            <a href="#top" class="logo"><img src="../assets/img/common/logo.svg" alt="marketing career"></a>
          </div>
        </div>
      </div>
    </footer>
    <!--[END] footer -->

    </div>
    <!-- [END] container -->

    <script type="text/javascript" src="../js/min/index.min.js"></script>
    <script type="text/javascript" src="../js/min/gnav.min.js"></script>
</body>

</html>
