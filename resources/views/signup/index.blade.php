<!DOCTYPE html>
<html>

<head>
  <!-- meta -->
  <title><!--利用登録--></title>
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
  <link rel="stylesheet" href="../css/min/signup.min.css">

  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>

<body>
  <!-- ここに内容を入れます -->

  <!-- container -->
  <div class="container">

    <!-- main -->
    <main>
      <div class="mainInner">
        <section class="signup">
          <h1 class="signup_title">SMoothJOB</h1>
          <div class="signup_box">
            <div class="signup_box_inner">
              <h2 class="signup_box_inner-head">会員登録情報の入力</h2>
              <form class="inputarea" id="signup" action="/confirm/" method="post">
                <div class="inputarea_box">
                  <div class="inputarea_box_label"><label class="inputarea_box_label text" for="familyname">姓<span class="req">※</span></label></div>
                  <span class="inputarea_box_fillout"><input class="inputarea_box_fillout in" type="text" placeholder="姓を入力してください" name="name1" value="<!--{$name1}-->" required></span>
                </div>
                <div class="inputarea_box">
                  <div class="inputarea_box_label"><label class="inputarea_box_label text" for="firstname">名<span class="req">※</span></label></div>
                  <span class="inputarea_box_fillout"><input class="inputarea_box_fillout in" type="text" placeholder="名を入力してください" name="name2" value="<!--{$name2}-->" required></span>
                </div>
                <div class="inputarea_box">
                  <div class="inputarea_box_label"><label class="inputarea_box_label text" for="familykana">セイ<span class="req">※</span></label></div>
                  <span class="inputarea_box_fillout"><input class="inputarea_box_fillout in" type="text" placeholder="セイを入力してください" name="kana1" value="<!--{$kana1}-->" required></span>
                </div>
                <div class="inputarea_box">
                  <div class="inputarea_box_label"><label class="inputarea_box_label text" for="firstkana">メイ<span class="req">※</span></label></div>
                  <span class="inputarea_box_fillout"><input class="inputarea_box_fillout in" type="text" placeholder="メイを入力してください" name="kana2" value="<!--{$kana2}-->" required></span>
                </div>
                <div class="inputarea_box">
                  <div class="inputarea_box_label"><label class="inputarea_box_label text" for="email">メールアドレス<span class="req">※</span></label></div>
                  <span class="inputarea_box_fillout"><input class="inputarea_box_fillout in" type="email" placeholder="メールアドレスを入力してください" name="email" value="<!--{$email}-->" required></span>
                </div>
                <div class="inputarea_box">
                  <div class="inputarea_box_label"><label class="inputarea_box_label text" for="psw">パスワード<span class="req">※</span></label></div>
                  <span class="inputarea_box_fillout"><input class="inputarea_box_fillout in" type="password" placeholder="半角英数字8文字以上で入力してください" name="login_pass" value="<!--{$login_pass}-->" required></span>
                </div>
                <div class="inputarea_guideline">
                  <span class="inputarea_guideline text"><a class="inputarea_guideline link" href="https://www.mmsouken.co.jp/privacy/">利用規約</a>をよく読んで、下記のボックスにチェックを入れてください</span>
                </div>
                <div class="inputarea_agree">
                  <span class="inputarea_agree_box"><input class="inputarea_agree_box checkbox" type="checkbox" name="agreement" required><label class="inputarea_agree_box text" for="checkbox">利用規約に同意する<span class="must">※</span></label></span>
                </div>
              </form>
              <button form="signup" class="cms_btn" type="submit"><span class="cms_btn action">確認画面へ進む</span></button>
            </div>
          </div>
        </section>
      </div>
    </main>
    <!--[END] main -->

  </div>
  <!-- [END] container -->

    <script type="text/javascript" src="js/min/index.min.js"></script>
    <script type="text/javascript" src="js/min/gnav.min.js"></script>
</body>

</html>
