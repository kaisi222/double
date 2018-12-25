<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>RSSを取得してページに表示する</title>
</head>
 
    <body><h1>誰のブログ読む？</h1>
        <!--
            <form action = "double.php" method = "get">
            <input type = "text" name ="thema" /><br/>
            <input type = "submit" value ="送信" />
            </form>
            
            
            
            <form method="post" action="double.php">
                <label><input type="checkbox" name="thema[]" value="里奈"> りなぷー</label>
                <label><input type="checkbox" name="thema[]" value="聖"> ふくちゃん</label>　
                <label><input type="checkbox" name="thema[]" value="衣梨奈">えりぽん</label>
                <input type="submit" value="表示"/>
            </form>
        -->     
            <form action="double.php" method="get">
                <select name="thema" />
	            <!-- モーニング娘。 -->
	            <option value="聖">ふくちゃん</option>
	            <option value="衣梨奈">えりぽん</option>
	            <option value="亜佑美">あゆみん</option>
	            <option value="優樹">まーちゃん</option>
	            <option value="さくら">小田ちゃん</option>
	            <option value="真莉愛">真莉愛</option>
	            <option value="美希">ちぇる</option>
	            <option value="朱音">あかねちん</option>
	            <option value="楓">かえでぃー</option>
	            <option value="玲奈">よこやん</option>
	            <option value="知沙希">ちぃちゃん</option>
	            <!-- アンジュルム -->
	            <option value="彩花">あやちょ</option>
	            <option value="香菜">かななん</option>
	            <option value="朱莉">タケちゃん</option>
	            <option value="里奈">りなぷ～</option>
	            <option value="瑞希">むろたん</option>
	            <option value="莉佳子">りかこ</option>
	            <option value="萌衣">かみこ</option>
	            <option value="桃奈">かっさー</option>
	            <option value="結">ふなっき</option>
	            <option value="文乃">かわむ</option>
	            <!-- juice=juice -->
	            <option value="由加">ゆかにゃ</option>
	            <option value="朋子">かなとも</option>
	            <option value="紗友希">紗友希</option>
	            <option value="佳林">佳林ちゃん</option>
	            <option value="あかり">うえむー</option>
	            <option value="奈々美">やなみん</option>
	            <option value="瑠々">瑠々ちゃん</option>
	            <option value="愛香">まなかん</option>
	            <!-- カントリー・ガールズ -->
	            <option value="梨沙">梨沙ちゃん</option>
	            <option value="舞">舞ちゃん</option>
	            <option value="知沙希">ちぃちゃん</option>
	            <option value="奈々美">やなみん</option>
	            <option value="結">ふなちゃん</option>
	            <!-- こぶしファクトリー -->
	            <option value="彩海">あやぱん</option>
	            <option value="彩乃">はまちゃん</option>
	            <option value="みな美">みなみな</option>
	            <option value="玲音">れいれい</option>
	            <option value="桜子">わださこ</option>
	            <!-- つばきファクトリー -->
	            <option value="理子">りこりこ</option>
	            <option value="樹々">樹々ちゃん</option>
	            <option value="リサ">リサまる</option>
	            <option value="ゆめの">きしもん</option>
	            <option value="安美">あんみぃ</option>
	            <option value="瑞歩">おのみず</option>
	            <option value="紗栞">さおりん</option>
	            <option value="眞緒">まおぴん</option>
	            <option value="希空">きそら</option>
	            <!-- beyooooonds -->	            
	            <option value="くるみ">くるみ</option>
	            <option value="こころ">こころ</option>
	            <option value="夢羽">夢羽</option>
	            <option value="美波">美波</option>
	            <option value="桃々姫♡">桃々姫</option>
	            <option value="伶奈">伶奈</option>
	            <option value="りか">りか</option>
	            <option value="汐里">汐里</option>
	            <option value="紗耶">紗耶</option>
	            <option value="美葉">美葉</option>
	            <option value="萌花">萌花</option>
	            <option value="うたの">うたの</option>
	            
                </select>
                <input type="submit" value="絞り込む"/>
            </form>
            


    <?php
    
    $rssList = array(
        "http://rssblog.ameba.jp/angerme-amerika/rss20.xml",
        "http://rssblog.ameba.jp/angerme-ayakawada/rss20.xml",
        "http://rssblog.ameba.jp/angerme-ss-shin/rss20.xml",
        "http://rssblog.ameba.jp/morningmusume-9ki/rss20.xml",
        "http://rssblog.ameba.jp/morningmusume-10ki/rss20.xml",
        "http://rssblog.ameba.jp/mm-12ki/rss20.xml",
        "http://rssblog.ameba.jp/morningmusume-13ki/rss20.xml",
        "http://rssblog.ameba.jp/juicejuice-official/rss20.xml",
        "http://rssblog.ameba.jp/countrygirls/rss20.xml",
        "http://rssblog.ameba.jp/kobushi-factory/rss20.xml",
        "http://rssblog.ameba.jp/tsubaki-factory/rss20.xml",
        "http://rssblog.ameba.jp/beyooooonds-rfro/rss20.xml",
        "http://rssblog.ameba.jp/beyooooonds-chicatetsu/rss20.xml"
    );
 
    for($n=0;$n<count($rssList);$n++){
        //var_dump($rssList);
        //URL設定
        $rss = simplexml_load_file("$rssList[$n]");
        $single = $rss->channel->item; 
        

        
        // 件数設定
        //$num_of_data = 3;
        
        //初期化
        $outdata = "";
        
        //for ($i=0; $i<$num_of_data; $i++){
        foreach($single as $info){
            

            //$single = $rss->channel->item[$i]; 
            $rssDate = $info->pubDate;
            date_default_timezone_set('Asia/Tokyo');
            $myDateGNU = strtotime($rssDate);
            $myDate = date('Y/m/d h:i',$myDateGNU);
            $myTitle = $info->title; //タイトル取得
            $myTitle = str_replace('♡', '', $myTitle);//♡消す
            $myLink = $info->link; //リンクURL取得
            
            
            $myCategory = mb_substr($info->title,6*-1);

            if($myCategory == "梨奈" or $myCategory == "佑美" or $myCategory == "くら" or $myCategory == "莉愛" or $myCategory == "な美" or $myCategory == "沙希" or $myCategory == "々美" or $myCategory == "友希" or $myCategory == "かり" or $myCategory == "ころ" or $myCategory == "るみ" or $myCategory == "たの"){
                $myCategory = mb_substr($info->title,9*-1);
            }
            elseif($myCategory == "村聖" or $myCategory == "木結" or $myCategory == "関舞"){
                $myCategory = mb_substr($info->title,3*-1);
            }
            elseif($myCategory == "姫♡" or $myCategory == "み♡"){
                $myCategory = mb_substr($info->title,12*-1);
            }
            elseif(strpos($myTitle,"佐藤優樹") !== false){
                $myCategory = "優樹";
            }
            elseif(strpos($myTitle,"岸本ゆめの") !== false){
                $myCategory = "ゆめの";
            }
            elseif(strpos($myLink,"angerme-ayakawada") !== false){
                $myCategory = "彩花";
            }
            elseif(strpos($myTitle,"お知らせ") !== false){
                $myCategory = "お知らせ";
            }
            
            
            //出力内容（CSSOK）
            if($_GET["thema"] == null){
            $outdata .=
            '<div style="float:left;width:120px;margin:0px 0px 0px 5px;font-size:12px">'.$myDate.'</div>
            [' . $myCategory . ']
            <a href="' . $myLink . '">' . $myTitle . '</a><br />';
            }
            elseif(strstr($myCategory,$_GET["thema"]) == true){
            $outdata .=
            '<div style="float:left;width:120px;margin:0px 0px 0px 5px;font-size:12px">'.$myDate.'</div>
            <!-- [' . $myCategory . '] -->
            <a href="' . $myLink . '">' . $myTitle . '</a><br />';
            }
  
            
        }

            //全部出力する
        
            echo $outdata;
            
    }
            
            
            
?>

        </body>
    
</html>