<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>hello!blog</title>
  
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
 
    <body>
        
<!-- ナビここから -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <!-- ハンバーガーメニュー -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- リアクセス -->
      <a class="navbar-brand" href="hello.php">hello!blog</a>
    </div>
    
      <!-- メニュー項目 -->
      <div id="navbar" class="collapse navbar-collapse navbar-right">

      <ul class="nav navbar-nav">
        <li>
            <a href="https://twitter.com/intent/tweet?screen_name=omanjusara" data-show-count="false">
                お問い合わせ
            </a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">モーニング<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="https://ameblo.jp/morningmusume-9ki/" target="_blank">Q期</a></li>
            <li><a href="https://ameblo.jp/morningmusume-10ki/" target="_blank">天気組</a></li>
            <li><a href="https://ameblo.jp/mm-12ki" target="_blank">12期</a></li>
            <li><a href="https://ameblo.jp/morningm-13ki/" target="_blank">13期14期</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">アンジュ<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="https://ameblo.jp/angerme-ayakawada" target="_blank">あや著</a></li>
            <li><a href="https://ameblo.jp/angerme-amerika" target="_blank">アメリカにっき</a></li>
            <li><a href="https://ameblo.jp/angerme-ss-shin" target="_blank">3～6期</a></li>
            <li><a href="https://ameblo.jp/angerme-new" target="_blank">7期</a></li>
          </ul>
        </li>
        <li><a href="http://ameblo.jp/juicejuice-official/" target="_blank">Juice</a></li>
        <li><a href="http://ameblo.jp/countrygirls/" target="_blank">カントリー</a></li>
        <li><a href="http://ameblo.jp/kobushi-factory/" target="_blank">こぶし</a></a></li>
        <li><a href="http://ameblo.jp/tsubaki-factory/" target="_blank">つばき</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">ビヨーンズ<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="https://ameblo.jp/beyooooonds-chicatetsu/" target="_blank">CHICA#TETSU</a></li>
            <li><a href="https://ameblo.jp/beyooooonds-rfro/" target="_blank">雨ノ森 川海</a></li>
            <li><a href="https://ameblo.jp/beyooooonds/" target="_blank">beyooooonds</a></li>
          </ul>
        </li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- ナビここまで -->

<!-- ソートメニューここから -->
  <div class="form-group row" style="display:inline-flex">
    <div class="col-lg-5 col-el-6">
            <form action="hello.php" method="get" class="form-inline">
                <select name="articles" />
                <option value="25">25記事</option>
                <option value="50">50記事</option>
                <option value="100">100記事</option>
                <option value="150">150記事</option>
                <option value="200">200記事</option>
                <option value="250">250記事</option>
                <option value="300">300記事</option>
                </select>
                <input type="submit" class="btn btn-default" value="表示"/>
            </form>   
    </div>
    
    <div class="col-lg-8 col-el-6">
            <form action="hello.php" method="get" class="form-inline">
                <select name="thema" />
                <option selected>選択してください</option>
	            <!-- モーニング娘。 -->
	            <optgroup label="モーニング娘。'<?php echo date("y"); ?>">
	            <option value="/m">M全メンバー</option>
	            <option value="聖">譜久村聖</option>
	            <option value="衣梨奈">生田衣梨奈</option>
	            <option value="亜佑美">石田亜佑美</option>
	            <option value="優樹">佐藤優樹</option>
	            <option value="さくら">小田さくら</option>
	            <option value="美希">野中美希</option>
	            <option value="真莉愛">牧野真莉愛</option>
	            <option value="朱音">羽賀朱音</option>
	            <option value="楓">加賀楓</option>
	            <option value="玲奈">横山玲奈</option>
	            <option value="知沙希">森戸知沙希</option>
	            </optgroup>
	            <!-- アンジュルム -->
	            <optgroup label="アンジュルム">
	            <option value="angerme">A全メンバー</option>
	            <option value="彩花">和田彩花</option>
	            <option value="香菜">中西香菜</option>
	            <option value="朱莉">竹内朱莉</option>
	            <option value="里奈">勝田里奈</option>
	            <option value="瑞希">室田瑞希</option>
	            <option value="莉佳子">佐々木莉佳子</option>
	            <option value="萌衣">上國料萌衣</option>
	            <option value="桃奈">笠原桃奈</option>
	            <option value="結">船木結</option>
	            <option value="文乃">川村文乃</option>
	            <option value="遥香">太田遥香</option>
	            <option value="鈴蘭">伊勢鈴蘭</option>
	            </optgroup>
	            <!-- juice=juice -->
	            <optgroup label="juice=juice">
	            <option value="juice">J全メンバー</option>
	            <option value="由加">宮崎由加</option>
	            <option value="朋子">金澤朋子</option>
	            <option value="紗友希">高木紗友希</option>
	            <option value="佳林">宮本佳林</option>
	            <option value="あかり">植村あかり</option>
	            <option value="奈々美">梁川奈々美</option>
	            <option value="瑠々">段原瑠々</option>
	            <option value="愛香">稲場愛香</option>
	            </optgroup>
	            <!-- countrygirls -->
	            <optgroup label="countrygirls">
	            <option value="country">C全メンバー</option>
	            <option value="梨沙">山木梨沙</option>
	            <option value="知沙希">森戸知沙希</option>
	            <option value="舞">小関舞</option>
	            <option value="奈々美">梁川奈々美</option>
	            <option value="結">船木結</option>
	            </optgroup>
	            <!-- こぶしファクトリー -->
	            <optgroup label="こぶしファクトリー">
	            <option value="kobushi">K全メンバー</option>
	            <option value="彩海">広瀬彩海</option>
	            <option value="みな美">野村みな美</option>
	            <option value="彩乃">浜浦彩乃</option>
	            <option value="桜子">和田桜子</option>
	            <option value="玲音">井上玲音</option>
	            </optgroup>
	            <!-- つばきファクトリー -->
	            <optgroup label="つばきファクトリー">
	            <option value="tsubaki">T全メンバー</option>
	            <option value="理子">山岸理子</option>
	            <option value="リサ">小片リサ</option>
	            <option value="希空">新沼希空</option>
	            <option value="安美">谷本安美</option>
	            <option value="ゆめの">岸本ゆめの</option>
	            <option value="樹々">浅倉樹々</option>
	            <option value="瑞歩">小野瑞歩</option>
	            <option value="紗栞">小野田紗栞</option>
	            <option value="眞緒">秋山眞緒</option>
	            </optgroup>
	            <!-- beyooooonds -->	 
	            <optgroup label="beyooooonds">
	            <option value="beyooooonds">B全メンバー</option>
	            <!-- ＞CHICA#TETSU -->	 
	            <option value="伶奈"> 一岡伶奈</option>
	            <option value="りか">島倉りか</option>
	            <option value="汐里">西田汐里</option>
	            <option value="紗耶">江口紗耶</option>
	            <!-- ＞雨ノ森 川海 -->
	            <option value="くるみ">高瀬くるみ</option>
	            <option value="こころ">前田こころ</option>
	            <option value="夢羽">山﨑夢羽</option>
	            <option value="美波">岡村美波</option>
	            <option value="桃々姫">清野桃々姫</option>
	            <!-- ＞ -->	 
	            <option value="美葉">平井美葉</option>
	            <option value="萌花">小林萌花</option>
	            <option value="うたの">里吉うたの</option>
	            </optgroup>
	            
                </select>
                <input type="submit" class="btn btn-default" value="ソート"/>
            </form>
      </div>
   </div>         
<!-- ソートメニューここまで -->
        
<?php
function multiRequest($data, $options = array()) { 
 
  // array of curl handles 
  $curly = array(); 
  // data to be returned 
  $result = array(); 
 
  // multi handle 
  $mh = curl_multi_init(); 
 
  // loop through $data and create curl handles 
  // then add them to the multi-handle 
  foreach ($data as $id => $d) { 
 
    $curly[$id] = curl_init(); 
 
    $url = (is_array($d) && !empty($d['url'])) ? $d['url'] : $d; 
    curl_setopt($curly[$id], CURLOPT_URL,            $url); 
    curl_setopt($curly[$id], CURLOPT_HEADER,         0); 
    curl_setopt($curly[$id], CURLOPT_RETURNTRANSFER, 1); 
 
    // post? 
    if (is_array($d)) { 
      if (!empty($d['post'])) { 
        curl_setopt($curly[$id], CURLOPT_POST,       1); 
        curl_setopt($curly[$id], CURLOPT_POSTFIELDS, $d['post']); 
      } 
    } 
 
    // extra options? 
    if (!empty($options)) { 
      curl_setopt_array($curly[$id], $options); 
    } 
 
    curl_multi_add_handle($mh, $curly[$id]); 
  } 
 
  // execute the handles 
  $running = null; 
  do { 
    curl_multi_exec($mh, $running); 
  } while($running > 0); 
 
  // get content and remove handles 
  foreach($curly as $id => $c) { 
    $result[$id] = curl_multi_getcontent($c); 
    curl_multi_remove_handle($mh, $c); 
  } 
 
  // all done 
  curl_multi_close($mh); 
 
  return $result; 
} 

?>


<?php     
//表示するブログのRSS
$rssList = //$data['feedurl'];

    array(
        "http://rssblog.ameba.jp/morningmusume-9ki/rss20.xml"
        ,"http://rssblog.ameba.jp/morningmusume-10ki/rss20.xml"
        ,"http://rssblog.ameba.jp/mm-12ki/rss20.xml"
        ,"http://rssblog.ameba.jp/morningm-13ki/rss20.xml"
        ,"http://rssblog.ameba.jp/angerme-amerika/rss20.xml"
        ,"http://rssblog.ameba.jp/angerme-ayakawada/rss20.xml"
        ,"http://rssblog.ameba.jp/angerme-ss-shin/rss20.xml"
        ,"http://rssblog.ameba.jp/angerme-new/rss20.xml"
        ,"http://rssblog.ameba.jp/juicejuice-official/rss20.xml"
        ,"http://rssblog.ameba.jp/countrygirls/rss20.xml"
        ,"http://rssblog.ameba.jp/kobushi-factory/rss20.xml"
        ,"http://rssblog.ameba.jp/tsubaki-factory/rss20.xml"
        ,"http://rssblog.ameba.jp/beyooooonds-rfro/rss20.xml"
        ,"http://rssblog.ameba.jp/beyooooonds-chicatetsu/rss20.xml"
        ,"http://rssblog.ameba.jp/beyooooonds/rss20.xml"
    );
    

//同時呼び出し
$rssdataRaw = multiRequest($rssList);


for($n=0; $n < count($rssdataRaw); $n++){
  $rssdata = simplexml_load_string($rssdataRaw[$n],'SimpleXMLElement',LIBXML_NOCDATA); //URL設定

  // RSS2.0取得
    $site = $rssdata->channel->title; //サイト名
    $rssdata = $rssdata->channel;
    foreach($rssdata->item as $myEntry){
      $myTitle = $myEntry->title;
      
      // 日時取得
      $rssDate = $myEntry->pubDate;
      if(!$rssDate) $rssDate = $myEntry->children("http://purl.org/dc/elements/1.1/")->date;
      date_default_timezone_set('Asia/Tokyo');
      $myDateGNU = strtotime($rssDate);
      $myDate = date('Y/m/d H:i:s',$myDateGNU);
      
      //リンクURL取得
      $myLink = $myEntry->link;
      
      
      //テーマ名取得
            $myCategory = mb_substr($myTitle,6*-1);
            if($myCategory == "梨奈" or $myCategory == "佑美" or $myCategory == "くら" or $myCategory == "莉愛" or $myCategory == "佳子" or $myCategory == "な美" or $myCategory == "沙希" or $myCategory == "々美" or $myCategory == "友希" or $myCategory == "かり" or $myCategory == "ころ" or $myCategory == "るみ" or $myCategory == "たの"){
                $myCategory = mb_substr($myTitle,9*-1);
            }
            elseif($myCategory == "村聖" or $myCategory == "賀楓" or $myCategory == "木結" or $myCategory == "関舞"){
                $myCategory = mb_substr($myTitle,3*-1);
            }
            elseif(strpos($myTitle,"佐藤優樹") !== false){
                $myCategory = "優樹";
            }
            elseif(strpos($myTitle,"岸本ゆめの") !== false){
                $myCategory = "ゆめの";
            }
            elseif(strpos($myTitle,"高瀬くるみ") !== false){
                $myCategory = "くるみ";
            }
            elseif(strpos($myTitle,"小片リサ") !== false){
                $myCategory = "リサ";
            }
            elseif($myCategory =="姫♡"){
                $myCategory = "桃々姫";
            }
            elseif($myCategory =="☘️"){
                $myCategory = "萌花";
            }
            elseif(strpos($myLink,"angerme-ayakawada") !== false){
                $myCategory = "彩花";
            }

      //連想配列($array)
      $array = array(
        "GNU" => $myDateGNU,
        "site" => $site,
        "category" => $myCategory,
      	"title" => $myTitle,
      	"url" => $myLink,
      	"date" => $myDate,
      	"visit" => 'none',
      );
      $outdata[$myDateGNU] = $array;
    }

}



//同時取得したRSSを更新日時順にソート
krsort($outdata);

$timestamp = array_column( $outdata,'GNU' );
$thema = array_column( $outdata,'category' );

$group = array( 
        "/m" => "/m",
        "angerme" => "angerme",
        "juice" => "juice",
        "country" => "country",
        "kobushi" => "kobushi",
        "tsubaki" => "tsubaki",
        "beyooooonds" => "beyooooonds"
        );

//ブログを表示
if($_GET["thema"] == null){
    //24時間以内に更新された記事リスト
    if($_GET["articles"] == NULL){
      echo "<h3>24時間以内に更新された記事</h3>";
        for($n=0;$test <= 86400 ;$n++){
          $test = $_SERVER['REQUEST_TIME'] - $outdata[$timestamp[$n]]['GNU'];
            echo "<pre>";
            echo $outdata[$timestamp[$n]]['date']."　";
            echo $outdata[$timestamp[$n]]['category']."　";
            echo "<br />";
            echo "<a href=";
            echo $outdata[$timestamp[$n]]['url'];
            echo ">";
            echo $outdata[$timestamp[$n]]['title'];
            echo "</a>";
            echo "</pre>";
        }        
      
    }
    //記事数を指定した記事リスト
    else{
        for($n=0;$n<$_GET["articles"];$n++){
            echo "<pre>";
            echo $outdata[$timestamp[$n]]['date']."　";
            echo $outdata[$timestamp[$n]]['category']."　";
            echo "<a href=";
            echo $outdata[$timestamp[$n]]['url'];
            echo ">";
            echo $outdata[$timestamp[$n]]['title'];
            echo "</a>";
            echo "</pre>";
        }
    }
}
//グループ名でソートした記事リスト
elseif(in_array($_GET["thema"],$group)){
          for($n=0;$n<1000;$n++){
           if(strpos($outdata[$timestamp[$n]]['url'],$_GET["thema"]) !== false){
            echo "<pre>";
            echo $outdata[$timestamp[$n]]['date']."　";
            echo $outdata[$timestamp[$n]]['category']."　";
            echo "<a href=";
            echo $outdata[$timestamp[$n]]['url'];
            echo ">";
            echo $outdata[$timestamp[$n]]['title'];
            echo "</a>";
            echo "</pre>";
            }
          }
    }
//メンバー名でソートした記事リスト
else{
  $member = $_GET["thema"];
  echo "<h3>{$member}さんが最近更新した記事</h3>";
          for($n=0;$n<1000;$n++){
            if($outdata[$timestamp[$n]]['category'] == $_GET["thema"]){
            echo "<pre>";
            echo $outdata[$timestamp[$n]]['date']."　";
            //echo $outdata[$timestamp[$n]]['category']."　";
            echo "<a href=";
            echo $outdata[$timestamp[$n]]['url'];
            echo ">";
            echo $outdata[$timestamp[$n]]['title'];
            echo "</a>";
            echo "</pre>";
            }
          }
}      

?>

        <p>不具合がありましたらご連絡下さい。</p>
        <p>
            <a class="twitter-mention-button"
              href="https://twitter.com/intent/tweet?screen_name=omanjusara" data-show-count="false">
                
            </a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </p>
        </body>
    
    
</html>