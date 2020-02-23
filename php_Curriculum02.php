<?php
    $a=3;
    $b=7;
    echo $a+$b."\n";
    
    $array_month=["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
    echo $array_month[7]."\n";
    
    $hello="Hello,";
    $name="諏訪";
    $world="‘s World!";
    echo $hello.$name.$world."\n";
    
    $tech_boost="tech";
    $tech_boost.="boost";
    echo $tech_boost."\n";
    
    /*変数の始めが数字になっています
     配列を囲む括弧が波括弧になっています
     2月の後のコンマが全角になっています
     Juneに＞が抜けています
     10月に""が抜けています
     echoで12月を表示する時Decemberに""がついていません
    */
    $_2018_calendar = [
      "January" => "1月",
      "February" => "2月",
      "March" => "3月",
      "April" => "4月",
      "May" => "5月",
      "June" => "6月",
      "July" => "7月",
      "August" => "8月",
      "September" => "9月",
      "October" => "10月",
      "November" => "11月",
      "December" => "12月"
    ];

// 12月を表示する
echo $_2018_calendar["December"];

?>