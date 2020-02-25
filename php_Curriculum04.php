<?php
    function double($num){
        return $num*2;
    }
    echo double(5)."\n";
    
    function sum($a,$b){
        return $a+$b;
    }
    echo sum(5,9)."\n";
    
    function array_multi($arr){
        $result=1;
        foreach($arr as $number){
            $result *= $number;
        }
        return $result;
    }
    echo array_multi(array(1, 3, 5 ,7, 9) )."\n";
    
    function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
     $max_number = $arr[0];
     foreach($arr as $a){
         //どうしたらいいかわからない・・・・

         //配列の要素と現在の最大値を比較、配列の要素の方が大きければ$max_numberに代入
         if($max_number<$a){
             $max_number=$a;
         }
     }
     return $max_number;
    }
    
    echo max_array(array(1, 3, 5 ,7, 100) )."\n";
    echo max_array(array(1, 3, 5 ,95, 9) )."\n";
    
    /*
     strip_tagsは文字列からhtmlタグとPHPタグを取り除きます。
     スクリプトインジェクションの脆弱性（？）対策のために使うようです。
     何か文字列を表示するときにhtmlspecialcharsやstrip_tagsを使用しないと危険というところまではわかりました。
     ただ、エスケープ処理にはほとんどhtmlspecialcharsを使用するそうなのでstrip_tagsをどんなときに使用するのかは不明のままです。
    
    */
    $str='<p>タグは表示されません</p>'."\n";
    echo strip_tags($str);
    
    /*
     array_pushは配列の末尾に要素を追加するときに使用します。
     しかしarray[]を使用したほうが高速との声が多いです。
    */
    
    $numbers=[1,3,9,587,648,5];
    array_push($numbers,99,125);
    print_r($numbers);
    
    /*
     array_merge配列を結合します。
     配列のキーが同じ文字列だと上書きされます。数字だと新たにキーが振りなおされるためされるため上書きされません。
     また、+で配列を結合した場合、同じキーでも上書きをされず、数字が振りなおされることもないです。
     PHP7.4からはスプレッド演算子がしようでできるため関数のarray_mergeよりもパフォーマンスがいいとのことです。
     スプレッド演算子は連想配列には使用不可です。
    */
    
    $array1=array(3,55,67,4,22);
    $array2=array(8,467,47,5,9);
    
    $array3 = array_merge($array1,$array2);
    print_r($array3);
    
    $array4=array(
        'color' => 'red',
        'name' => 'apple',
    );
    $array5 = array(
        'color'=>'blue'
    );
    $array6=array_merge($array4,$array5);
    print_r($array6);
    
    //以下+で結合した場合,redが上書きされない
    $array7=$array4+$array5;
    print_r($array7);
    
    //重複するキーが数字の場合,キーが振りなおされるため上書きされない
    $array8=array(
        99=>1,
        100=>2,
    );
    $array9=array(
        99=>3,
        103=>4
    );
    $array10=array_merge($array8,$array9);
    print_r($array10);
    
    /*
     timeは現在のUNIXタイムスタンプ（1970 年 1 月 1 日 00:00:00 GMT）からの経過秒数を返します。
     timeは単純に日時を比較するときに使用します。
     mktimeは指定した時間のUNIXタイムスタンプを返します。引数になにもいれなければ現在のタイムスタンプを返します。
     書式はmktime(時、分、秒、月、日、年)です。
    */
    
    $date1=time();
    $date2=mktime();
    $date3=mktime(23,50,45,3,26,2020);
    
    echo $date1."\n";
    echo $date2."\n";
    echo $date3."\n";
    
    /*
    　time、mktimeはタイムスタンプを返すが、dateは日時を表示します。    
    　書式はdate ( フォーマット, タイムスタンプ)です。第二引数を省略すると現在のタイムスタンプを使用します。
    */
    
    //現在の時刻を表示
    $date4=date("Y-m-d H:i:s T");
    echo $date4."\n";
?>