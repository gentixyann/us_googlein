<?php
session_start();


if(isset($_SESSION["lang"])){
    $lang = $_SESSION["lang"];

function trans($word,$lang){
  //翻訳ファイルを読み込み
  require("lang/words_".$lang.".php");

  //配列からデータを取得
  $trans_word = $word_list[$word];

  //文字を返す
  return $trans_word;
}
}
?>






<!doctype html>
<!--[if gt IE 8]><!-->
<html class="no-js" lang="ja"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HELP</title>


    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--For Plugins external css-->
    <!-- <link rel="stylesheet" href="assets/css/plugins.css" /> -->
    <!--Theme custom css -->
    <link rel="stylesheet" href="css/help_style.css">
    <!--Theme Responsive css-->
    <link rel="stylesheet" href="css/help_responsive.css" >
    <script type="text/javascript" src="js/footerFixed.js"></script>
        <!-- header -->
    <link rel="stylesheet" href="css/navi.css" />
    <link rel="stylesheet" href="css/hero.css" />


    <script>
    //Google Maps
    //initMapでMapを作っている
      var map;
      var randomLat = Math.random()*140 - 70;
      var randomLng = Math.random()*360 - 180;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          //center: {lat: -34.397, lng: 150.644},
          center: {lat: randomLat, lng: randomLng},
          zoom: 3
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAL3qe_lcSnHCs7ENLJM9sMEHnxNABZb04&callback=initMap"
           async defer></script>


    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height:300px;
        width: 80%;
        /*border-radius: 50%;*/
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
</head>
<body>

<header>
  <a class="navbar-brand logo" href="login_google.php"></a>
    <div class=" topnav" id="myTopnav">
       <?php if (isset($_SESSION["id"])){ ?>
       <a href="logout.php">Logout</a>
       <a href="profile.php">MyPage</a>
       <a href="post.php">POST</a>
       <?php } ?>
       <a href="help.php">Help</a>
       <a class="active" href="json_map.php">*MAP*</a>
      <a href="javascript:void(0);" style="font-size:30px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>
</header>


  <section id="choose" class="choose">
    <div class="container">
      <div class="row">
        <div class="main_choose sections">
          <div class="center-block">
            <div class="head_title">
              <legend class="profile_title">HELP</legend>

            </div>
                <div class="single_choose">
                  <div class="single_choose_acording">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                      <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                     <a class="collapsed">
                      <i class="fa fa-bullseye"></i>WHAT IS  " WHERE IS * " ?
                          </a>
                      </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: auto;">
                      <div class="panel-body">
                       <?php echo trans("俺たちの遊び。",$lang); ?> <br>
                      <?php echo trans("ここってどんなところなんやろー？もしかしたらその疑問に答えてくれるかもしれないもの。",$lang); ?>
                      </div>
                      </div>
                      </div>

                      <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                     <a class="collapsed">
                      <i class="fa fa-bullseye"></i>How To Post
                          </a>
                      </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: auto;">
                      <div class="panel-body">
                     <?php echo trans("⑴まずここでログイン必要やから",$lang); ?> <br>
                      <?php echo trans("⑵youtubeアカウントある？まずそっちにアップして。え？それがそもそもわからんって？これ見てガンバー",
                      $lang); ?>&nbsp;&nbsp;
                      <u>
                      <a href="https://support.google.com/youtube/answer/57407?co=GENIE.Platform%3DDesktop&hl=en" target="_blank" style="display:inline">Youtube Help</a></u>
                      <br>
                       <?php echo trans("⑶投稿画面のマップクリックして、撮影地の緯度経度を調べて入れて",$lang); ?><br>
                      <?php echo trans("⑷youtubeでアップしたい動画を右クリック（マックなら両指クリックの事な）んだら選択肢に「動画コード取得」があると思うから、それクリックな。んだらそれがコピーされるんや",$lang); ?><br>
                      <?php echo trans("⑸動画埋め込みコードの所に貼り付けて、GO や！",$lang); ?>
                      </div>

                      <div class="youtube">
                      <iframe width="640" height="360" src="https://www.youtube.com/embed/QYYfzBJNJZg?ecver=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                      </div>

                      </div>
                      </div>

                      <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                     <a class="collapsed">
                      <i class="fa fa-bullseye"></i>HOW DO I REPORT ?
                          </a>
                      </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: auto;">
                      <div class="panel-body">
                      <?php echo trans("例えば、肖像権侵害と思われる動画を発見。通報と削除依頼をする場合は",$lang); ?><u><a href="contact.php" style="display:inline">Contact Us</a></u> <?php echo trans("から申請をしてください。ただし、Youtubeから消えるわけではないのでご注意を。",$lang); ?>
                      </div>
                      </div>
                      </div>

                      <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                     <a class="collapsed">
                      <i class="fa fa-bullseye"></i>Other
                          </a>
                      </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: auto;">
                      <div class="panel-body">
                      <u><a href="contact.php" style="display:inline">Contact Us</a></u>
                      <?php echo trans("からお問い合わせしてね",$lang); ?>
                      </div>
                      </div>
                      </div>

                    </div>
                  </div>
                </div>
        </div>

        <div>
            <div class="center-block" id="map"></div>
        </div>

      </div>
    </div>
  </div>
  </section>

  <div id="footer" class="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-2"></div>
          <div class="col-sm-8 webscope">
            <span class="webscope-text"> The world view by </span>
            <a href=""> <img src="img/logo04.png"/> </a>
          </div>
        <div class="col-sm-2"></div>
      </div>
    </div>
  </div>

  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 <script src="js/navi.js"> </script>
</body>
</html>
