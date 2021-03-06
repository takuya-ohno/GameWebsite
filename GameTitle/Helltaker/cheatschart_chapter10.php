<!DOCTYPE html>
<head>
  <!-- 文字コード-->
  <meta charset="utf-8">

  <!-- SEO-->
  <meta name="description" content="HelltakerのChapter1攻略"/>
  <meta name="keywords" content="Helltaker, STEAM">

  <!-- ライブラリ -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

  <!-- 独自css-->
  <link rel="stylesheet" type="text/css" href="../../css/common.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">

  <title>チャプター10 エピローグ : Helltaker攻略</title>
</head>
<body>

  <!-- ヘッダー -->
  <?php include('./header.html'); ?>


  <!-- コンテンツ-->
  <div class="container-fluid">
    <div class="row">
      <!-- サイド コンテンツ -->
      <div class="col-lg-3">
        <?php include('./sidemenu.html'); ?>
      </div>

      <!-- メイン コンテンツ-->
      <div class="col-lg-8">

      <h2>チャプター10 エピローグ</h2>

      <!-- 目次 -->
      <h4 class="content">目次</h4>
      <ul>
        <li><a href="#normal-ending">通常エンディング</a></li>
        <li><a href="#another-ending">特殊エンディング</a></li>
        <li><a href="#choices">選択肢</a></li>
      </ul>

        <!-- 通常エンディング -->
        <h4 class="content dropdown-bar" id="normal-ending" data-toggle="collapse" data-target="#collapse-normal-ending" aria-controls="collapse-normal-ending">通常エンディング　▼</h4>
        <ul class="collapse show" id="collapse-normal-ending">
          <li>悪魔の娘たちに近づくと、会話が出来る。</li>
          <img src="./images/chapter10-map.jpg" class="img-fluid" alt="チャプター10マップ" width="850" height="650">

          <li>左下のパトカーに近づき、ドアを開けるとクリア。</li>
          <img src="./images/chapter10-normal-ending.jpg" class="img-fluid" alt="チャプター10 通常エンディング" width="850" height="650">
        </ul>


        <!-- 特殊エンディング -->
        <h4 class="content dropdown-bar" id="another-ending" data-toggle="collapse" data-target="#collapse-another-ending" aria-controls="collapse-another-ending">特殊エンディング　▼</h4>
        <ul class="collapse show" id="collapse-another-ending">
          <li>中央の魔法陣で、隠しコマンドを入れるとポータルが開く。</li>
          <p><a class="achievement" href="./achievement">&#x1f3c6;<b>実績「Abysstaker」</b></a>を獲得。</p>
          <img src="./images/chapter10-map2.jpg" class="img-fluid" alt="チャプター10マップ2" width="850" height="650">

          <li>隠しコマンド</li>
          <p>チャプター4～チャプター6で入手できる<b>「古代の碑文」</b>を集める。</p>
          <p>Escボタンを押すと開くメニューの下に、移動する方向が書かれている。</p>
          <img src="./images/menu.jpg" class="img-fluid" alt="メニュー" width="850" height="650">
          <ul>
            <li>コマンド:　↓↑→↑←↓↓←↑↓→↑</li>
          </ul>

          <li>ポータルの中に入るとクリア。</li>
          <img src="./images/chapter10-map3.jpg" class="img-fluid" alt="チャプター10マップ3" width="850" height="650">
        </ul>

        <!-- 選択肢 -->
        <h4 class="content dropdown-bar" id="choices" data-toggle="collapse" data-target="#collapse-choices" aria-controls="collapse-choices">選択肢　▼</h4>

        <div class="collapse show" id="collapse-choices">

          <img src="./images/chapter10-choices.jpg" class="img-fluid" alt="チャプター10選択肢" width="850" height="650">

          <table class="table-responsive">
            <tr>
              <th>選択肢</th>
              <th>備考</th>
            </tr>
            <tr>
              <td>チョコレートパンケーキなら。</td>
              <td>クリア</td>
            </tr>
            <tr>
              <td>チョコレートパンケーキなら。</td>
              <td>クリア</td>
            </tr>
          </table>
        </div>
      </div>

      <!-- サイド コンテンツ -->
      <div class="col-lg-1"></div>
    </div>
  </div>

</body>