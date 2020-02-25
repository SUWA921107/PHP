<?php 
    $name='諏訪';
    
    if($name=='諏訪'){
        echo "私は".$name."です。"."\n";
    }
    else{
        echo $name."ではありません"."\n";
    }
    
    $sum=0;
    for($i=0;$i<10000;$i++){
        $sum+=$i;
    }
    echo $sum."\n";
    
    $fruits=["りんご","ばなな","なし","もも","ぶどう"];
    foreach($fruits as $fruit){
        echo $fruit."\n";
    }
    
    /* for文の始めの値を定義する */
    $start = 1;
    /* for文の終わりの値を定義する */
    
    /*以下修正点コメント
      echo $iの後に;がありません
    　最初のコメントの/前に*が抜けてます
    　100まで表示しなければならので$i<$endではなく$i<=$endです
    */
    $end = 100;
    
    for($i = $start; $i <= $end; $i++){
    
      // 5で割り切れたら{}内を実行する
      if($i % 5 == 0){
        echo $i."\n";
      }
    }

?>