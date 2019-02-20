<!DOCTYPE html>
<html>

<head>
  <!-- meta -->
  <title>特集一覧</title>
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
  <link rel="stylesheet" href="../../css/min/special.min.css">

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

        <section class="cms-contents featureContents">
          <div class="contentsInner">
            <div class="cms-head">
              <h2>Special<span>特集コーナー</span></h2>
            </div>
            <ul class="speciallist">
              <li class="speciallist_special">
                <a href="/{number}" class="speciallist_special_link">
                  <img src="../../img/" alt="" class="speciallist_special_link-action">
                </a>
              </li>
              <li class="speciallist_special">
                <a href="/{number}" class="speciallist_special_link">
                  <img src="../../img/" alt="" class="speciallist_special_link-action">
                </a>
              </li>
              <li class="speciallist_special">
                <a href="/{number}" class="speciallist_special_link">
                  <img src="../../img/" alt="" class="speciallist_special_link-action">
                </a>
              </li>
            </ul>
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
    <!-- footerが入ります -->
    <!--[END] footer -->

  </div>
  <!-- [END] container -->

    <script type="text/javascript" src="js/min/index.min.js"></script>
    <script type="text/javascript" src="js/min/gnav.min.js"></script>
</body>

</html>
