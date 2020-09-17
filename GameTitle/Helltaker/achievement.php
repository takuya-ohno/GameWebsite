<!DOCTYPE html>
<head>
  <!-- 文字コード-->
  <meta charset="utf-8">

  <!-- ライブラリ  jquery-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- ライブラリ -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <!-- 独自css-->
  <link rel="stylesheet" type="text/css" href="../../css/common.css">
  <link rel="stylesheet" type="text/css" href="../../css/header.css">
  <link rel="stylesheet" type="text/css" href="css/header-background.css">

  <title>実績 : Helltaker攻略</title>
</head>
<body>

  <!-- ヘッダー -->
  <?php include('./Header.html'); ?>


  <!-- コンテンツ-->
  <div class="container-fluid">
    <div class="row">
      <!-- サイド コンテンツ -->
      <div class="col-lg-2"></div>

      <!-- メイン コンテンツ-->
      <div class="col-lg-8">

      <h2>実績</h2>

      <h4 class="content">目次</h4>
      <ul>
        <li><a href="#all-achievement">実績一覧</a></li>
        <li><a href="#achievement-explanation">獲得ガイド</a></li>
      </ul>

      <h4 class="content dropdown-bar" id="all-achievement" data-toggle="collapse" data-target="#collapse-all-achievement" aria-controls="collapse-all-achievement">実績一覧　▼</h4>

      <table class="table-responsive collapse show" id="collapse-all-achievement">
        <tr>
          <th class="table-primary">アイコン</th>
          <th class="table-primary">名称</th>
          <th class="table-primary">詳細</th>
        </tr>
        <tr>
          <th class="cell-info"><img src="./images/achievement/Doomtaker.jpg" class="img-fluid" alt="Doomtaker.jpg"></th>
          <td class="cell-info">Doomtaker</td>
          <td class="cell-info">Romance a demon</td>
        </tr>
        <tr>
          <th class="cell-info"><img src="./images/achievement/Lifetaker.jpg" class="img-fluid" alt="Lifetaker.jpg"></th>
          <td class="cell-info">Lifetaker</td>
          <td class="cell-info">Find some peace</td>
        </tr>
        <tr>
          <th class="cell-info"><img src="./images/achievement/Heaventaker.jpg" class="img-fluid" alt="Heaventaker.jpg"></th>
          <td class="cell-info">Heaventaker</td>
          <td class="cell-info">Abandon your quest</td>
        </tr>
        <tr>
          <th class="cell-info"><img src="./images/achievement/Queentaker.jpg" class="img-fluid" alt="Queentaker.jpg"></th>
          <td class="cell-info">Queentaker</td>
          <td class="cell-info">Survive the audience</td>
        </tr>
        <tr>
          <th class="cell-info"><img src="./images/achievement/Gatetaker.jpg" class="img-fluid" alt="Gatetaker.jpg"></th>
          <td class="cell-info">Gatetaker</td>
          <td class="cell-info">Reach the gate</td>
        </tr>
        <tr>
          <th class="cell-info"><img src="./images/achievement/Sintaker.jpg" class="img-fluid" alt="Sintaker.jpg"></th>
          <td class="cell-info">Sintaker</td>
          <td class="cell-info">Face your sins</td>
        </tr>
        <tr>
          <th class="cell-info"><img src="./images/achievement/Pathtaker.jpg" class="img-fluid" alt="Pathtaker.jpg"></th>
          <td class="cell-info">Pathtaker</td>
          <td class="cell-info">Disregard the key</td>
        </tr>
        <tr>
          <th class="cell-info"><img src="./images/achievement/Abysstaker.jpg" class="img-fluid" alt="Abysstaker.jpg"></th>
          <td class="cell-info">Abysstaker</td>
          <td class="cell-info">Make the steps</td>
        </tr>
      </table>

      <h4 class="content dropdown-bar" id="achievement-explanation" data-toggle="collapse" data-target="#collapse-all-achievement-explanation" aria-controls="collapse-all-achievement-explanation">獲得ガイド　▼</h4>

      <div class="collapse show" id="collapse-all-achievement-explanation">
        <h4 class="content">Pathtaker</h4>
        <p><a href="./cheatschart_chapter4.php">チャプター4 毒舌悪魔</a>、<a href="./cheatschart_chapter5.php">チャプター5 性悪悪魔</a>、<a href="./cheatschart_chapter6.php">チャプター6 探求天使</a>で<br>
        入手できる「古代の碑文」を手に入れる。</p>
          <img src="./images/Pathtaker.jpg" class="img-fluid" alt="Pathtaker.jpg">

          <h4 class="content">Lifetaker</h4>
          <p>チャプター6 探求天使のヒントの選択肢で<b>「自殺する」</b>を選ぶ。</p>
          <img src="./images/Lifetaker.jpg" class="img-fluid" alt="Lifetaker.jpg">

          <h4 class="content">Heaventaker</h4>
          <p><a href="./cheatschart_chapter6.php">チャプター6 探求天使</a>の最後の選択肢で<b>「天使を探している。」</b>を選ぶ。</p>
          <img src="./images/chapter6-choices.jpg" class="img-fluid" alt="chapter6-choices.jpg">

          <h4 class="content">Abysstaker</h4>
          <p><a href="./cheatschart_chapter10.php">チャプター10 エピローグ</a>で、魔法陣の上で隠しコマンドを入力する。</p>
          <img src="./images/chapter10-map3.jpg" class="img-fluid" alt="chapter10-map3.jpg">
      </div>

      </div>

      <!-- サイド コンテンツ -->
      <div class="col-lg-2"></div>
    </div>
  </div>

</body>