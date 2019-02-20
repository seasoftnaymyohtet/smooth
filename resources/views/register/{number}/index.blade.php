<!DOCTYPE html>
<html>

<head>
  <!-- meta -->
  <title><!--本会員登録--></title>
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
  <link rel="stylesheet" href="../../css/min/register.min.css">

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
        <section class="register">
          <h1 class="register_title">SMoothJOB</h1>
          <div class="register_box">
            <div class="register_box_inner">
              <h2 class="register_box_inner-head">本会員登録（無料）</h2>
              <span class="register_box_inner-text">※は必須入力項目です</span>
              <form class="formarea" id="register" action="/complete/" method="post">
                <section class="formarea_box">
                  <div class="inner">
                    <div class="formarea_box_head">
                      <span class="formarea_box_head text">プロフィール写真<span class="must">※</span></span>
                    </div>
                    <div class="formarea_box_inputarea">
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">写真</span></div>
                        <div class="inputline_choice">
                          <label class="inputline_choice_label" for="highschool"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" accept="image/jpeg,image/gif,image/jpg,image/png" name="pic" type="file" value="">写真をアップロード</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="inner">
                    <div class="formarea_box_head">
                      <span class="formarea_box_head text">生年月日<span class="must">※</span></span>
                    </div>
                    <div class="formarea_box_inputarea">
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">生年月日</span></div>
                        <div class="inputline_box">
                          <div class="inputline_box_side">
                            <div class="inputline_box_side_grp">
                              <div class="slctitem">
                                <select class="slctitem_select" name="brthyear">
                                  <option class="slctitem_select in" value="">年（西暦）</option>
                                </select>
                              </div>
                              <div class="slctitem">
                                <select class="slctitem_select" name="brthmonth">
                                  <option class="slctitem_select in" value="">月</option>
                                </select>
                              </div>
                              <div class="slctitem">
                                <select class="slctitem_select" name="brthdate">
                                  <option class="slctitem_select in" value="">日</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="inner">
                    <div class="formarea_box_head">
                      <span class="formarea_box_head text">性別<span class="must">※</span></span>
                    </div>
                    <div class="formarea_box_inputarea">
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">性別</span></div>
                        <div class="inputline_choice">
                          <label class="inputline_choice_label" for="male"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="gender[]" type="radio" value="">男性</label>
                          <label class="inputline_choice_label" for="female"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="gender[]" type="radio" value="">女性</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="inner">
                    <div class="formarea_box_head">
                      <span class="formarea_box_head text">連絡先<span class="must">※</span></span>
                    </div>
                    <div class="formarea_box_inputarea">
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">自宅電話</span></div>
                        <div class="inputline_fill">
                          <input class="inputline_fill in" name="house" type="number" value="">
                        </div>
                      </div>
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">携帯電話</span><span class="must">※</span></div>
                        <div class="inputline_fill">
                          <input class="inputline_fill in" name="mobile" type="number" value="">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="inner">
                    <div class="formarea_box_head">
                      <span class="formarea_box_head text">住所<span class="must">※</span></span>
                    </div>
                    <div class="formarea_box_inputarea">
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">郵便番号</span><span class="must">※</span></div>
                        <div class="inputline_icon"></div>
                        <div class="inputline_fill">
                          <input class="inputline_fill in" name="code1" type="number" value="">
                        </div>
                        <div class="inputline_fill">
                          <input class="inputline_fill in" name="code2" type="number" value="">
                        </div>
                        <div class="inputline_autobtn"><span class="inputline_autobtn action">自動</span></div>
                      </div>
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">都道府県</span><span class="must">※</span></div>
                        <div class="slctitem">
                          <select class="slctitem_select" name="prefecture">
                            <option class="slctitem_select in" value="">都道府県を選択してください</option>
                          </select>
                        </div>
                      </div>
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">住所1(市町村番地まで)</span><span class="must">※</span></div>
                        <div class="inputline_fill">
                          <input class="inputline_fill in" name="adrs1" type="text" value="">
                        </div>
                      </div>
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">住所2(ビル名・マンション名)</span></div>
                        <div class="inputline_fill">
                          <input class="inputline_fill in" name="adrs2" type="text" value="">
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="formarea_box">
                  <div class="inner">
                    <div class="formarea_box_head">
                      <span class="formarea_box_head text">成し遂げたいこと<span class="option">（任意）</span></span>
                    </div>
                    <div class="formarea_box_inputarea">
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">3年後に目指す姿</span></div>
                        <div class="inputline_fill">
                          <input class="inputline_fill in" name="vision" type="text" value="">
                        </div>
                      </div>
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">理想とのギャップ・課題</span></div>
                        <div class="inputline_fill">
                          <textarea class="inputline_fill in" name="current" value="" rows="8" cols="80"></textarea>
                        </div>
                      </div>
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">これからのチャレンジ</span></div>
                        <div class="inputline_fill">
                          <textarea class="inputline_fill in" name="challenge" value="" rows="8" cols="80"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="inner">
                    <div class="formarea_box_head">
                      <span class="formarea_box_head text">自分の提供価値<span class="option">（任意）</span></span>
                    </div>
                    <div class="formarea_box_inputarea">
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">自分の強み</span></div>
                        <div class="inputline_fill">
                          <textarea class="inputline_fill in" name="strength" value="" rows="8" cols="80"></textarea>
                        </div>
                      </div>
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">企業にどんな価値をもたらすか</span></div>
                        <div class="inputline_fill">
                          <textarea class="inputline_fill in" name="worth" value="" rows="8" cols="80"></textarea>
                        </div>
                      </div>
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">それを表す具体的エピソード</span></div>
                        <div class="inputline_fill">
                          <textarea class="inputline_fill in" name="episode" value="" rows="8" cols="80"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="formarea_box">
                  <div class="inner">
                    <div class="formarea_box_head">
                      <span class="formarea_box_head text">最終学歴<span class="must">※</span></span>
                    </div>
                    <div class="formarea_box_inputarea">
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">学校区分</span></div>
                        <div class="inputline_choice">
                          <label class="inputline_choice_label" for="highschool"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="seg[]" type="radio" value="">高校卒</label>
                          <label class="inputline_choice_label" for="specialized"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="seg[]" type="radio" value="">専門学校卒</label>
                          <label class="inputline_choice_label" for="university"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="seg[]" type="radio" value="">大学卒</label>
                          <label class="inputline_choice_label" for="gdschool"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="seg[]" type="radio" value="">大学院卒</label>
                        </div>
                      </div>
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">学校名</span></div>
                        <div class="inputline_fill">
                          <input class="inputline_fill in" name="school" type="text" value="">
                        </div>
                      </div>
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">学部学科名</span></div>
                        <div class="inputline_fill">
                          <input class="inputline_fill in" name="faculty" type="text" value="">
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="formarea_box">
                  <div class="inner">
                    <div class="formarea_box_head">
                      <span class="formarea_box_head text">職歴<span class="option">（任意）</span></span>
                    </div>
                    <div class="formarea_box_inputarea">
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">企業名</span></div>
                        <div class="inputline_fill">
                          <input class="inputline_fill in" name="company[]" type="text" value="">
                        </div>
                      </div>
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">在籍期間</span></div>
                        <div class="inputline_box">
                          <div class="inputline_box_side">
                            <span class="inputline_box_side label">入社</span>
                            <div class="inputline_box_side_grp">
                              <div class="slctitem">
                                <select class="slctitem_select" name="inyear[]">
                                  <option class="slctitem_select in" value="">年（西暦）</option>
                                </select>
                              </div>
                              <div class="slctitem">
                                <select class="slctitem_select" name="inmonth[]">
                                  <option class="slctitem_select in" value="">月</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="inputline_box_side">
                            <span class="inputline_box_side label">退社</span>
                            <div class="inputline_box_side_grp">
                              <div class="slctitem">
                                <select class="slctitem_select" name="outyear[]">
                                  <option class="slctitem_select in" value="">年（西暦）</option>
                                </select>
                              </div>
                              <div class="slctitem">
                                <select class="slctitem_select" name="outmonth[]">
                                  <option class="slctitem_select in" value="">月</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">職種</span></div>
                        <div class="slctitem">
                          <select class="slctitem_select" name="ocptn[]">
                            <option class="slctitem_select in" value="">職種を選んでください</option>
                          </select>
                        </div>
                      </div>
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">業務内容</span></div>
                        <div class="inputline_fillbox">
                          <textarea class="inputline_fill in" name="task" value="" rows="8" cols="80"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="cms_btn"><span class="cms_btn action">職歴を追加</span></div>
                </section>
                <section class="formarea_box">
                  <div class="inner">
                    <div class="formarea_box_head">
                      <span class="formarea_box_head text">転職希望時期<span class="option">（任意）</span></span>
                    </div>
                    <div class="formarea_box_inputarea">
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">転職希望時期</span></div>
                        <div class="inputline_choice">
                          <label class="inputline_choice_label" for="now"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="when[]" type="radio" value="">すぐにでも</label>
                          <label class="inputline_choice_label" for="three"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="when[]" type="radio" value="">3ヶ月以内</label>
                          <label class="inputline_choice_label" for="half"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="when[]" type="radio" value="">半年以内</label>
                          <label class="inputline_choice_label" for="one"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="when[]" type="radio" value="">1年以内</label>
                          <label class="inputline_choice_label" for="good"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="when[]" type="radio" value="">いい企業・いいキャンペーンがあれば</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="formarea_box">
                  <div class="inner">
                    <div class="formarea_box_head">
                      <span class="formarea_box_head text">転職希望業種<span class="option">（任意）</span></span>
                    </div>
                    <div class="formarea_box_inputarea">
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">農業・林業</span></div>
                        <div class="inputline_all"><label class="inputline_choice_label" for="all"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="af" type="radio" value="">すべて選択</label></div>
                        <div class="inputline_choice">
                          <label class="inputline_choice_label" for="agr"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="agriculture" type="radio" value="">農業</label>
                          <label class="inputline_choice_label" for="frs"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="foresty" type="radio" value="">林業</label>
                        </div>
                      </div>
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">漁業</span></div>
                        <div class="inputline_all"><label class="inputline_choice_label" for="all"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="fi" type="radio" value="">すべて選択</label></div>
                        <div class="inputline_choice">
                          <label class="inputline_choice_label" for="fish"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="fish" type="radio" value="">漁業（水産養殖業を除く）</label>
                          <label class="inputline_choice_label" for="water"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="water" type="radio" value="">水産養殖業</label>
                        </div>
                      </div>
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">鉱業、採石業、砂利採取業</span></div>
                        <div class="inputline_all"><label class="inputline_choice_label" for="all"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="mi" type="radio" value="">すべて選択</label></div>
                        <div class="inputline_choice">
                          <label class="inputline_choice_label" for="mine"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="mine" type="radio" value="">鉱業、採石業、砂利採取業</label>
                        </div>
                      </div>
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">建設業</span></div>
                        <div class="inputline_all"><label class="inputline_choice_label" for="all"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="ci" type="radio" value="">すべて選択</label></div>
                        <div class="inputline_choice">
                          <label class="inputline_choice_label" for="gc"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="gc" type="radio" value="">総合工事業</label>
                          <label class="inputline_choice_label" for="ic"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="ic" type="radio" value="">識別工事業（設備工事業を除く）</label>
                          <label class="inputline_choice_label" for="fc"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="fc" type="radio" value="">設備工事業</label>
                        </div>
                      </div>
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">製造業</span></div>
                        <div class="inputline_all"><label class="inputline_choice_label" for="all"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="manufacturing" type="radio" value="">すべて選択</label></div>
                        <div class="inputline_choice">
                          <label class="inputline_choice_label" for="food"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="food" type="radio" value="">食品製造業</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section class="formarea_box">
                  <div class="inner">
                    <div class="formarea_box_head">
                      <span class="formarea_box_head text">転職希望職種<span class="option">（任意）</span></span>
                    </div>
                    <div class="formarea_box_inputarea">
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">マーケティング系</span></div>
                        <div class="inputline_all"><label class="inputline_choice_label" for="all"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="marketing_all" type="radio" value="">すべて選択</label></div>
                        <div class="inputline_choice">
                          <label class="inputline_choice_label" for="marketing"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="marketing" type="radio" value="">マーケティング</label>
                          <label class="inputline_choice_label" for="corporate"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="corporate" type="radio" value="">経営企画</label>
                          <label class="inputline_choice_label" for="business"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="business" type="radio" value="">事業企画</label>
                          <label class="inputline_choice_label" for="merchandise"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="merchandise" type="radio" value="">商品企画・商品開発</label>
                          <label class="inputline_choice_label" for="branding"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="branding" type="radio" value="">ブランドマネージャー</label>
                          <label class="inputline_choice_label" for="product"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="product" type="radio" value="">プロダクトマネージャー</label>
                          <label class="inputline_choice_label" for="kpi"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="kpi" type="radio" value="">KPIデザイナー</label>
                          <label class="inputline_choice_label" for="database"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="database" type="radio" value="">データベースマーケター</label>
                        </div>
                      </div>
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">営業系</span></div>
                        <div class="inputline_all"><label class="inputline_choice_label" for="all"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="sales_all" type="radio" value="">すべて選択</label></div>
                        <div class="inputline_choice">
                          <label class="inputline_choice_label" for="btobsales"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="btobsales" type="radio" value="">法人営業</label>
                          <label class="inputline_choice_label" for="salesplaner"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="salesplaner" type="radio" value="">営業企画</label>
                          <label class="inputline_choice_label" for="insidesales"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="insidesales" type="radio" value="">インサイドセールス</label>
                          <label class="inputline_choice_label" for="cs"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="cs" type="radio" value="">カスタマーサクセス</label>
                        </div>
                      </div>
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">デジタル系</span></div>
                        <div class="inputline_all"><label class="inputline_choice_label" for="all"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="digital_all" type="radio" value="">すべて選択</label></div>
                        <div class="inputline_choice">
                          <label class="inputline_choice_label" for="webdirector"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="webdirector" type="radio" value="">WEBディレクター</label>
                          <label class="inputline_choice_label" for="producer"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="producer" type="radio" value="">プロデューサー</label>
                          <label class="inputline_choice_label" for="contentsmake"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="contentsmake" type="radio" value="">コンテンツ制作</label>
                          <label class="inputline_choice_label" for="designer"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="designer" type="radio" value="">デザイナー</label>
                          <label class="inputline_choice_label" for="writer"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="writer" type="radio" value="">コピーライター</label>
                          <label class="inputline_choice_label" for="itconsultant"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="itconsultant" type="radio" value="">ITコンサルタント</label>
                          <label class="inputline_choice_label" for="bsnssanalysist"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="bsnssanalysist" type="radio" value="">ビジネスアナリスト</label>
                          <label class="inputline_choice_label" for="sysytmanalysist"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="sysytmanalysist" type="radio" value="">システムアナリスト</label>
                          <label class="inputline_choice_label" for="sftwrdev"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="sftwrdev" type="radio" value="">ソフトウェア開発者</label>
                          <label class="inputline_choice_label" for="prgrmmr"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="prgrmmr" type="radio" value="">プログラマー</label>
                          <label class="inputline_choice_label" for="webmaster"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="webmaster" type="radio" value="">ウェブマスター</label>
                          <label class="inputline_choice_label" for="creativedir"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="creativedir" type="radio" value="">クリエイティブディレクター</label>
                        </div>
                      </div>
                      <div class="inputline">
                        <div class="inputline_item"><span class="inputline_item text">コーポレート系</span></div>
                        <div class="inputline_all"><label class="inputline_choice_label" for="all"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="digital_all" type="radio" value="">すべて選択</label></div>
                        <div class="inputline_choice">
                          <label class="inputline_choice_label" for="orgactivity"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="orgactivity" type="radio" value="">組織活性</label>
                          <label class="inputline_choice_label" for="recruiter"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="recruiter" type="radio" value="">採用</label>
                          <label class="inputline_choice_label" for="promotion"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="promotion" type="radio" value="">広報・PR・宣伝</label>
                          <label class="inputline_choice_label" for="general"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="general" type="radio" value="">総務</label>
                          <label class="inputline_choice_label" for="salesasis"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="salesasis" type="radio" value="">営業事務</label>
                          <label class="inputline_choice_label" for="educonsultant"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="educonsultant" type="radio" value="">教育コンサルタント</label>
                          <label class="inputline_choice_label" for="datamanager"><span class="inputline_choice_label dec"></span><input class="inputline_choice_label in" name="datamanager" type="radio" value="">データ管理者</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </form>
              <button form="register" class="cms_btn" type="submit"><span class="cms_btn action">登録完了</span></button>
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
